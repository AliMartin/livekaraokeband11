(function (Drupal, once) {
  function isIOS() {
    // iPadOS can report as MacIntel, so also check touch points
    return /iP(hone|ad|od)/.test(navigator.userAgent) ||
      (navigator.platform === "MacIntel" && navigator.maxTouchPoints > 1);
  }

  function getBgComputed(el) {
    if (!el) return null;
    var cs = window.getComputedStyle(el);
    if (!cs || !cs.backgroundImage || cs.backgroundImage === "none") return null;

    return {
      image: cs.backgroundImage,
      color: cs.backgroundColor,
      repeat: cs.backgroundRepeat,
      position: cs.backgroundPosition,
      size: cs.backgroundSize
    };
  }

  function applyFrom(sourceEl) {
    var bg = getBgComputed(sourceEl);
    if (!bg) return false;

    var root = document.documentElement;
    root.classList.add("ios-fixed-bg");

    root.style.setProperty("--ios-bg-image", bg.image);
    root.style.setProperty("--ios-bg-color", bg.color);
    root.style.setProperty("--ios-bg-repeat", bg.repeat);
    root.style.setProperty("--ios-bg-position", bg.position);
    root.style.setProperty("--ios-bg-size", bg.size);

    return true;
  }

  function apply() {
    if (!isIOS() || !document.body) return;

    // Most common: module targets body. Fallback: html.
    if (applyFrom(document.body)) return;
    applyFrom(document.documentElement);
  }

  Drupal.behaviors.iosFixedBackground = {
    attach: function (context) {
      once("iosFixedBackground", "html", context).forEach(function () {
        apply();

        // If the module applies the random bg late (BigPipe/AJAX), keep trying briefly.
        var tries = 0;
        var timer = window.setInterval(function () {
          tries++;
          apply();
          if (document.documentElement.classList.contains("ios-fixed-bg") || tries >= 20) {
            window.clearInterval(timer);
          }
        }, 250);

        window.addEventListener("orientationchange", apply);
        window.addEventListener("load", apply);
      });
    }
  };
})(Drupal, once);
