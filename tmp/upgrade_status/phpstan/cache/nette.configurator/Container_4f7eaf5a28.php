<?php
// source: phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: /var/www/html/tmp/upgrade_status/deprecation_testing.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_4f7eaf5a28 extends _PHPStan_5adafcbb8\Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'017' => true,
			'0282' => true,
			'0288' => true,
			'0300' => true,
			'0307' => true,
			'0318' => true,
			'0333' => true,
			'0363' => true,
			'0372' => true,
			'0386' => true,
			'0415' => true,
			'0468' => true,
			'0469' => true,
			'0470' => true,
			'0471' => true,
			'0472' => true,
			'0473' => true,
			'0474' => true,
			'0475' => true,
			'0476' => true,
			'0477' => true,
			'0478' => true,
			'0487' => true,
			'0488' => true,
			'0489' => true,
			'0490' => true,
			'0491' => true,
			'0492' => true,
			'0493' => true,
			'0494' => true,
			'0495' => true,
			'0496' => true,
			'0497' => true,
			'0498' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['026' => true, '027' => true],
		'phpstan.gnsr.stmtHandler' => [
			'042' => true,
			'043' => true,
			'044' => true,
			'045' => true,
			'046' => true,
			'047' => true,
			'048' => true,
			'049' => true,
			'050' => true,
			'051' => true,
			'052' => true,
			'053' => true,
			'054' => true,
			'055' => true,
		],
		'phpstan.gnsr.exprHandler' => [
			'060' => true,
			'061' => true,
			'062' => true,
			'063' => true,
			'064' => true,
			'065' => true,
			'067' => true,
			'069' => true,
			'070' => true,
			'071' => true,
			'072' => true,
			'073' => true,
			'074' => true,
			'075' => true,
			'076' => true,
			'077' => true,
			'078' => true,
			'079' => true,
			'080' => true,
			'081' => true,
			'082' => true,
			'083' => true,
			'084' => true,
			'086' => true,
			'088' => true,
			'089' => true,
			'090' => true,
			'091' => true,
			'092' => true,
			'093' => true,
			'094' => true,
			'095' => true,
			'097' => true,
			'098' => true,
			'099' => true,
			'0100' => true,
			'0101' => true,
			'0102' => true,
			'0103' => true,
			'0104' => true,
			'0105' => true,
			'0106' => true,
			'0107' => true,
			'0108' => true,
		],
		'phpstan.parser.richParserNodeVisitor' => [
			'0127' => true,
			'0128' => true,
			'0129' => true,
			'0130' => true,
			'0131' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0143' => true,
			'0144' => true,
			'0145' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0150' => true,
		],
		'phpstan.stubFilesExtension' => [
			'0154' => true,
			'0158' => true,
			'0161' => true,
			'0163' => true,
			'0164' => true,
			'0504' => true,
		],
		'phpstan.rules.rule' => [
			'0172' => true,
			'0173' => true,
			'0174' => true,
			'0175' => true,
			'0176' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.2' => true,
			'rules.3' => true,
			'rules.4' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0246' => true,
			'0247' => true,
			'0249' => true,
			'0251' => true,
			'0254' => true,
			'0256' => true,
			'0257' => true,
			'0258' => true,
			'0259' => true,
			'0260' => true,
			'0263' => true,
			'0265' => true,
			'0266' => true,
			'0269' => true,
			'0270' => true,
			'0271' => true,
			'0274' => true,
			'0277' => true,
			'0278' => true,
			'0279' => true,
			'0281' => true,
			'0283' => true,
			'0284' => true,
			'0285' => true,
			'0286' => true,
			'0287' => true,
			'0289' => true,
			'0290' => true,
			'0291' => true,
			'0293' => true,
			'0298' => true,
			'0299' => true,
			'0302' => true,
			'0304' => true,
			'0305' => true,
			'0306' => true,
			'0307' => true,
			'0308' => true,
			'0309' => true,
			'0311' => true,
			'0316' => true,
			'0317' => true,
			'0319' => true,
			'0320' => true,
			'0321' => true,
			'0322' => true,
			'0323' => true,
			'0325' => true,
			'0327' => true,
			'0329' => true,
			'0330' => true,
			'0332' => true,
			'0335' => true,
			'0336' => true,
			'0337' => true,
			'0340' => true,
			'0341' => true,
			'0342' => true,
			'0343' => true,
			'0345' => true,
			'0346' => true,
			'0347' => true,
			'0349' => true,
			'0350' => true,
			'0351' => true,
			'0352' => true,
			'0354' => true,
			'0355' => true,
			'0356' => true,
			'0357' => true,
			'0358' => true,
			'0361' => true,
			'0365' => true,
			'0366' => true,
			'0367' => true,
			'0368' => true,
			'0369' => true,
			'0370' => true,
			'0371' => true,
			'0373' => true,
			'0374' => true,
			'0378' => true,
			'0381' => true,
			'0382' => true,
			'0385' => true,
			'0387' => true,
			'0390' => true,
			'0392' => true,
			'0393' => true,
			'0394' => true,
			'0395' => true,
			'0397' => true,
			'0398' => true,
			'0399' => true,
			'0400' => true,
			'0402' => true,
			'0403' => true,
			'0404' => true,
			'0406' => true,
			'0407' => true,
			'0410' => true,
			'0413' => true,
			'0414' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0250' => true,
			'0264' => true,
			'0267' => true,
			'0268' => true,
			'0275' => true,
			'0280' => true,
			'0303' => true,
			'0310' => true,
			'0313' => true,
			'0314' => true,
			'0338' => true,
			'0348' => true,
			'0353' => true,
			'0359' => true,
			'0375' => true,
			'0379' => true,
			'0380' => true,
			'0388' => true,
			'0391' => true,
			'0408' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0253' => true,
			'0273' => true,
			'0328' => true,
			'0339' => true,
			'0377' => true,
			'0384' => true,
			'0386' => true,
			'0409' => true,
			'0499' => true,
			'0500' => true,
			'0501' => true,
		],
		'phpstan.broker.operatorTypeSpecifyingExtension' => ['0255' => true],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0261' => true,
			'0262' => true,
			'0276' => true,
			'0301' => true,
			'0334' => true,
			'0344' => true,
			'0376' => true,
			'0401' => true,
		],
		'phpstan.broker.propertiesClassReflectionExtension' => ['0292' => true, '0502' => true],
		'phpstan.functionParameterClosureTypeExtension' => ['0296' => true],
		'phpstan.functionParameterOutTypeExtension' => ['0297' => true, '0383' => true, '0411' => true],
		'phpstan.dynamicMethodThrowTypeExtension' => ['0312' => true, '0315' => true, '0364' => true],
		'phpstan.dynamicFunctionThrowTypeExtension' => [
			'0324' => true,
			'0326' => true,
			'0360' => true,
			'0389' => true,
			'0405' => true,
		],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0412' => true, '0505' => true],
		'phpstan.diagnoseExtension' => ['0436' => true],
		'phpstan.broker.methodsClassReflectionExtension' => ['0503' => true],
		'phpstan.deprecations.deprecatedScopeResolver' => ['0506' => true, '0507' => true, '0508' => true, '0512' => true],
		'phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension' => ['0509' => true],
		'phpstan.restrictedClassConstantUsageExtension' => ['0514' => true],
		'phpstan.restrictedFunctionUsageExtension' => ['0515' => true],
		'phpstan.restrictedMethodUsageExtension' => ['0516' => true],
		'phpstan.restrictedPropertyUsageExtension' => ['0517' => true],
		'phpstan.restrictedClassNameUsageExtension' => ['0518' => true],
	];

	protected $types = ['container' => '_PHPStan_5adafcbb8\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_5adafcbb8\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'0172',
				'0173',
				'0174',
				'0175',
				'0176',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0467',
				'0479',
				'0480',
				'0481',
				'0482',
				'0483',
				'0513',
				'0519',
				'0520',
				'0521',
				'0522',
				'0523',
				'0524',
				'0525',
			],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
			],
		],
		'PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule' => [['rules.0']],
		'mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule' => [['rules.1']],
		'mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule' => [['rules.2']],
		'mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\AbstractPluginManagerRule' => [1 => ['rules.3']],
		'mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule' => [['rules.3']],
		'mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule' => [['rules.4']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule' => [['rules.5']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule' => [['rules.6']],
		'mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule' => [['rules.7']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\DeprecatedAnnotationsRuleBase' => [1 => ['rules.8', 'rules.9']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule' => [['rules.8']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule' => [['rules.9']],
		'mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludeBase' => [1 => ['rules.10', 'rules.11']],
		'mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude' => [['rules.10']],
		'mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes' => [['rules.11']],
		'mglaman\PHPStanDrupal\Rules\Drupal\EntityQuery\EntityQueryHasAccessCheckRule' => [['rules.12']],
		'mglaman\PHPStanDrupal\Rules\Drupal\TestClassesProtectedPropertyModulesRule' => [['rules.13']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['01']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['02']],
		'PHPStan\Dependency\DependencyResolver' => [['03']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\FuzzyRelativePathHelper' => [['relativePathHelper']],
		'PHPStan\File\FileExcluderFactory' => [['04']],
		'PHPStan\File\FileHelper' => [['05']],
		'PHPStan\File\FileMonitor' => [['06']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['07']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['010'], ['08', '09']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['08']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['09']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['011']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['012']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['013']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory' => [['014']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['015']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['betterReflectionReflector'],
			2 => [1 => 'originalBetterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			0 => ['betterReflectionReflector'],
			2 => [1 => 'nodeScopeResolverReflector'],
		],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['016']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'017',
				'0282',
				'0288',
				'0300',
				'0307',
				'0318',
				'0333',
				'0363',
				'0372',
				'0386',
				'0415',
				'0468',
				'0469',
				'0470',
				'0471',
				'0472',
				'0473',
				'0474',
				'0475',
				'0476',
				'0477',
				'0478',
				'0487',
				'0488',
				'0489',
				'0490',
				'0491',
				'0492',
				'0493',
				'0494',
				'0495',
				'0496',
				'0497',
				'0498',
			],
		],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension' => [['017']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['018']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['019']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['020']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['021']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['022']],
		'PHPStan\Reflection\Deprecation\DeprecationProvider' => [['023']],
		'PHPStan\Reflection\AttributeReflectionFactory' => [['024']],
		'PHPStan\Reflection\ConstructorsHelper' => [['025']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['026', '027']],
		'PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension' => [['026']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['027']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['028']],
		'PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider' => [['028']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\Analyser\Analyser' => [['029']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['030']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['031']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\LegacyTypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\LocalIgnoresProcessor' => [['032']],
		'PHPStan\Analyser\Generator\AssignHelper' => [['033']],
		'PHPStan\Analyser\Generator\NodeHandler\ParamHandler' => [['034']],
		'PHPStan\Analyser\Generator\NodeHandler\StmtsHandler' => [['035']],
		'PHPStan\Analyser\Generator\NodeHandler\PropertyHooksHandler' => [['036']],
		'PHPStan\Analyser\Generator\NodeHandler\AttrGroupsHandler' => [['037']],
		'PHPStan\Analyser\Generator\NodeHandler\DeprecatedAttributeHelper' => [['038']],
		'PHPStan\Analyser\Generator\NodeHandler\ArgsHandler' => [['039']],
		'PHPStan\Analyser\Generator\NodeHandler\StatementPhpDocsHelper' => [['040']],
		'PHPStan\Analyser\Generator\NodeHandler\VarAnnotationHelper' => [['041']],
		'PHPStan\Analyser\Generator\StmtHandler' => [
			['042', '043', '044', '045', '046', '047', '048', '049', '050', '051', '052', '053', '054', '055'],
		],
		'PHPStan\Analyser\Generator\StmtHandler\NamespaceHandler' => [['042']],
		'PHPStan\Analyser\Generator\StmtHandler\TraitHandler' => [['043']],
		'PHPStan\Analyser\Generator\StmtHandler\EchoHandler' => [['044']],
		'PHPStan\Analyser\Generator\StmtHandler\UseHandler' => [['045']],
		'PHPStan\Analyser\Generator\StmtHandler\IfHandler' => [['046']],
		'PHPStan\Analyser\Generator\StmtHandler\DeclareHandler' => [['047']],
		'PHPStan\Analyser\Generator\StmtHandler\ClassMethodHandler' => [['048']],
		'PHPStan\Analyser\Generator\StmtHandler\ClassLikeHandler' => [['049']],
		'PHPStan\Analyser\Generator\StmtHandler\FunctionHandler' => [['050']],
		'PHPStan\Analyser\Generator\StmtHandler\ReturnHandler' => [['051']],
		'PHPStan\Analyser\Generator\StmtHandler\ExpressionHandler' => [['052']],
		'PHPStan\Analyser\Generator\StmtHandler\PropertyHandler' => [['053']],
		'PHPStan\Analyser\Generator\StmtHandler\NopHandler' => [['054']],
		'PHPStan\Analyser\Generator\StmtHandler\ContinueBreakHandler' => [['055']],
		'PHPStan\Analyser\Generator\VirtualAssignHelper' => [['056']],
		'PHPStan\Analyser\Generator\GeneratorNodeScopeResolver' => [['057']],
		'PHPStan\Analyser\Generator\SpecifiedTypesHelper' => [['058']],
		'PHPStan\Analyser\Generator\GeneratorScopeFactory' => [['059']],
		'PHPStan\Analyser\Generator\ExprHandler' => [
			[
				'060',
				'061',
				'062',
				'063',
				'064',
				'065',
				'067',
				'069',
				'070',
				'071',
				'072',
				'073',
				'074',
				'075',
				'076',
				'077',
				'078',
				'079',
				'080',
				'081',
				'082',
				'083',
				'084',
				'086',
				'088',
				'089',
				'090',
				'091',
				'092',
				'093',
				'094',
				'095',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0103',
				'0104',
				'0105',
				'0106',
				'0107',
				'0108',
			],
		],
		'PHPStan\Analyser\Generator\ExprHandler\SpaceshipHandler' => [['060']],
		'PHPStan\Analyser\Generator\ExprHandler\ArrowFunctionHandler' => [['061']],
		'PHPStan\Analyser\Generator\ExprHandler\BitwiseNotHandler' => [['062']],
		'PHPStan\Analyser\Generator\ExprHandler\StaticCallHandler' => [['063']],
		'PHPStan\Analyser\Generator\ExprHandler\CastIntHandler' => [['064']],
		'PHPStan\Analyser\Generator\ExprHandler\FuncCallHandler' => [['065']],
		'PHPStan\Analyser\Generator\ExprHandler\ClosureHelper' => [['066']],
		'PHPStan\Analyser\Generator\ExprHandler\BooleanNotHandler' => [['067']],
		'PHPStan\Analyser\Generator\ExprHandler\MethodCallHelper' => [['068']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryModHandler' => [['069']],
		'PHPStan\Analyser\Generator\ExprHandler\CastBoolHandler' => [['070']],
		'PHPStan\Analyser\Generator\ExprHandler\AssignHandler' => [['071']],
		'PHPStan\Analyser\Generator\ExprHandler\ConstFetchHandler' => [['072']],
		'PHPStan\Analyser\Generator\ExprHandler\Virtual\TypeExprHandler' => [['073']],
		'PHPStan\Analyser\Generator\ExprHandler\UnaryMinusHandler' => [['074']],
		'PHPStan\Analyser\Generator\ExprHandler\NotEqualHandler' => [['075']],
		'PHPStan\Analyser\Generator\ExprHandler\BitwiseXorHandler' => [['076']],
		'PHPStan\Analyser\Generator\ExprHandler\BitwiseOrHandler' => [['077']],
		'PHPStan\Analyser\Generator\ExprHandler\MethodCallHandler' => [['078']],
		'PHPStan\Analyser\Generator\ExprHandler\NewHandler' => [['079']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryPlusHandler' => [['080']],
		'PHPStan\Analyser\Generator\ExprHandler\CastStringHandler' => [['081']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryShiftRightHandler' => [['082']],
		'PHPStan\Analyser\Generator\ExprHandler\ClosureHandler' => [['083']],
		'PHPStan\Analyser\Generator\ExprHandler\CastArrayHandler' => [['084']],
		'PHPStan\Analyser\Generator\ExprHandler\NullsafeShortCircuitingHelper' => [['085']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryMinusHandler' => [['086']],
		'PHPStan\Analyser\Generator\ExprHandler\VoidTypeHelper' => [['087']],
		'PHPStan\Analyser\Generator\ExprHandler\MagicConstHandler' => [['088']],
		'PHPStan\Analyser\Generator\ExprHandler\CastDoubleHandler' => [['089']],
		'PHPStan\Analyser\Generator\ExprHandler\UnaryPlusHandler' => [['090']],
		'PHPStan\Analyser\Generator\ExprHandler\EqualHandler' => [['091']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryPowHandler' => [['092']],
		'PHPStan\Analyser\Generator\ExprHandler\CastObjectHandler' => [['093']],
		'PHPStan\Analyser\Generator\ExprHandler\IdenticalHandler' => [['094']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryDivHandler' => [['095']],
		'PHPStan\Analyser\Generator\ExprHandler\ImmediatelyCalledCallableHelper' => [['096']],
		'PHPStan\Analyser\Generator\ExprHandler\ScalarIntHandler' => [['097']],
		'PHPStan\Analyser\Generator\ExprHandler\ScalarFloatHandler' => [['098']],
		'PHPStan\Analyser\Generator\ExprHandler\ClassConstFetchHandler' => [['099']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryShiftLeftHandler' => [['0100']],
		'PHPStan\Analyser\Generator\ExprHandler\ScalarStringHandler' => [['0101']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryMulHandler' => [['0102']],
		'PHPStan\Analyser\Generator\ExprHandler\NotIdenticalHandler' => [['0103']],
		'PHPStan\Analyser\Generator\ExprHandler\InterpolatedStringHandler' => [['0104']],
		'PHPStan\Analyser\Generator\ExprHandler\LiteralArrayHandler' => [['0105']],
		'PHPStan\Analyser\Generator\ExprHandler\VariableHandler' => [['0106']],
		'PHPStan\Analyser\Generator\ExprHandler\BitwiseAndHandler' => [['0107']],
		'PHPStan\Analyser\Generator\ExprHandler\BinaryConcatHandler' => [['0108']],
		'PHPStan\Analyser\IgnoreErrorExtensionProvider' => [['0109']],
		'PHPStan\Analyser\RicherScopeGetTypeHelper' => [['0110']],
		'PHPStan\Analyser\NodeScopeResolver' => [['0111']],
		'PHPStan\Analyser\FileAnalyser' => [['0112']],
		'PHPStan\Analyser\ScopeFactory' => [['0113']],
		'PHPStan\Analyser\AnalyserResultFinalizer' => [['0114']],
		'PHPStan\Analyser\ConstantResolver' => [['0115']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\Analyser\Ignore\IgnoreLexer' => [['0116']],
		'PHPStan\Analyser\Ignore\IgnoredErrorHelper' => [['0117']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['0118']],
		'PHPStan\Cache\Cache' => [['0119']],
		'PHPStan\Command\FixerApplication' => [['0120']],
		'PHPStan\Command\AnalyserRunner' => [['0121']],
		'PHPStan\Command\AnalyseApplication' => [['0122']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.github',
				'errorFormatter.junit',
				'errorFormatter.checkstyle',
				'errorFormatter.gitlab',
				'errorFormatter.teamcity',
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.json',
				'errorFormatter.prettyJson',
			],
			['0123'],
		],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['0123']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['0124']],
		'PhpParser\PrettyPrinter\Standard' => [1 => ['0125']],
		'PhpParser\PrettyPrinterAbstract' => [1 => ['0125']],
		'PhpParser\PrettyPrinter' => [1 => ['0125']],
		'PHPStan\Node\Printer\Printer' => [['0125']],
		'PHPStan\Node\Printer\ExprPrinter' => [['0126']],
		'PhpParser\NodeVisitorAbstract' => [
			[
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0447',
				'0456',
				'0457',
			],
		],
		'PhpParser\NodeVisitor' => [
			[
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0142',
				'0143',
				'0144',
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0447',
				'0456',
				'0457',
			],
		],
		'PHPStan\Parser\TypeTraverserInstanceofVisitor' => [['0127']],
		'PHPStan\Parser\VariadicFunctionsVisitor' => [['0128']],
		'PHPStan\Parser\ArrayFindArgVisitor' => [['0129']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['0130']],
		'PHPStan\Parser\ImplodeArgVisitor' => [['0131']],
		'PHPStan\Parser\LexerFactory' => [['0132']],
		'PHPStan\Parser\ClosureBindToVarVisitor' => [['0133']],
		'PHPStan\Parser\ImmediatelyInvokedClosureVisitor' => [['0134']],
		'PHPStan\Parser\MagicConstantParamDefaultVisitor' => [['0135']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['0136']],
		'PHPStan\Parser\DeclarePositionVisitor' => [['0137']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['0138']],
		'PHPStan\Parser\AnonymousClassVisitor' => [['0139']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['0140']],
		'PHPStan\Parser\VariadicMethodsVisitor' => [['0141']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['0142']],
		'PHPStan\Parser\ClosureArgVisitor' => [['0143']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['0144']],
		'PHPStan\Parser\ClosureBindArgVisitor' => [['0145']],
		'PHPStan\Parser\CurlSetOptArrayArgVisitor' => [['0146']],
		'PHPStan\Parser\LastConditionVisitor' => [['0147']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['0148']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['0149']],
		'PHPStan\Parser\StandaloneThrowExprVisitor' => [['0150']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['0151']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['0152']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['0153']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['0154', '0158', '0161', '0163', '0164', '0504']],
		'PHPStan\PhpDoc\BcMathNumberStubFilesExtension' => [['0154']],
		'PHPStan\PhpDoc\StubValidator' => [['0155']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['0156']],
		'PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider' => [['0156']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['0157']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['0157']],
		'PHPStan\PhpDoc\SocketSelectStubFilesExtension' => [['0158']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['0159']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['0160']],
		'PHPStan\PhpDoc\JsonValidateStubFilesExtension' => [['0161']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['0162']],
		'PHPStan\PhpDoc\ReflectionClassStubFilesExtension' => [['0163']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\PhpDoc\ReflectionEnumStubFilesExtension' => [['0164']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0165']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesCheck' => [['0166']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0167']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0167']],
		'PHPStan\Rules\Properties\AccessPropertiesCheck' => [['0168']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0169']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0170']],
		'PHPStan\Rules\ClassForbiddenNameCheck' => [['0171']],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['0172']],
		'PHPStan\Rules\Debug\DumpPhpDocTypeRule' => [['0173']],
		'PHPStan\Rules\Debug\DumpNativeTypeRule' => [['0174']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['0175']],
		'PHPStan\Rules\Debug\DebugScopeRule' => [['0176']],
		'PHPStan\Rules\ClassNameCheck' => [['0177']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0178']],
		'PHPStan\Rules\AttributesCheck' => [['0179']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0180']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0181']],
		'PHPStan\Rules\Pure\FunctionPurityCheck' => [['0182']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0183']],
		'PHPStan\Rules\Functions\PrintfHelper' => [['0184']],
		'PHPStan\Rules\RuleLevelHelper' => [['0185']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0186']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0187']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeCheck' => [['0188']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0189']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0190']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0191']],
		'PHPStan\Rules\ParameterCastableToStringCheck' => [['0192']],
		'PHPStan\Rules\Methods\ParentMethodHelper' => [['0193']],
		'PHPStan\Rules\Methods\AlwaysUsedMethodExtensionProvider' => [['0194']],
		'PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider' => [['0194']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0195']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0196']],
		'PHPStan\Rules\Methods\MethodPrototypeFinder' => [['0197']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0198']],
		'PHPStan\Rules\Methods\MethodVisibilityComparisonHelper' => [['0199']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0200']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0200']],
		'PHPStan\Rules\TooWideTypehints\TooWideTypeCheck' => [['0201']],
		'PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck' => [['0202']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0203']],
		'PHPStan\Rules\Classes\MethodTagCheck' => [['0204']],
		'PHPStan\Rules\Classes\LocalTypeAliasesCheck' => [['0205']],
		'PHPStan\Rules\Classes\MixinCheck' => [['0206']],
		'PHPStan\Rules\Classes\ConsistentConstructorHelper' => [['0207']],
		'PHPStan\Rules\Classes\PropertyTagCheck' => [['0208']],
		'PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule' => [['0209']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule' => [['0210']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule' => [['0211']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule' => [['0212']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule' => [['0213']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule' => [['0214']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule' => [['0215']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule' => [['0216']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule' => [['0217']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule' => [['0218']],
		'PHPStan\Rules\PhpDoc\GenericCallableRuleHelper' => [['0219']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0220']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0221']],
		'PHPStan\Rules\PhpDoc\RequireExtendsCheck' => [['0222']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck' => [['0223']],
		'PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper' => [['0224']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0225']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['0226']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0227']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0228']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0229'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0229']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0230']],
		'PHPStan\Rules\NullsafeCheck' => [['0231']],
		'PHPStan\Rules\IssetCheck' => [['0232']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0233']],
		'PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper' => [['0234']],
		'PHPStan\Rules\Playground\NeverRuleHelper' => [['0235']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0236']],
		'PHPStan\Fixable\PhpDoc\PhpDocEditor' => [['0237']],
		'PHPStan\Fixable\Patcher' => [['0238']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0239']],
		'PHPStan\Type\LazyTypeAliasResolverProvider' => [['0239']],
		'PHPStan\Type\ClosureTypeFactory' => [['0240']],
		'PHPStan\Type\TypeAliasResolver' => [['0241']],
		'PHPStan\Type\UsefulTypeAliasResolver' => [['0241']],
		'PHPStan\Type\Regex\RegexGroupParser' => [['0242']],
		'PHPStan\Type\Regex\RegexExpressionHelper' => [['0243']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0244']],
		'PHPStan\Type\Constant\OversizedArrayBuilder' => [['0245']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0246',
				'0247',
				'0249',
				'0251',
				'0254',
				'0256',
				'0257',
				'0258',
				'0259',
				'0260',
				'0263',
				'0265',
				'0266',
				'0269',
				'0270',
				'0271',
				'0274',
				'0277',
				'0278',
				'0279',
				'0281',
				'0283',
				'0284',
				'0285',
				'0286',
				'0287',
				'0289',
				'0290',
				'0291',
				'0293',
				'0298',
				'0299',
				'0302',
				'0304',
				'0305',
				'0306',
				'0307',
				'0308',
				'0309',
				'0311',
				'0316',
				'0317',
				'0319',
				'0320',
				'0321',
				'0322',
				'0323',
				'0325',
				'0327',
				'0329',
				'0330',
				'0332',
				'0335',
				'0336',
				'0337',
				'0340',
				'0341',
				'0342',
				'0343',
				'0345',
				'0346',
				'0347',
				'0349',
				'0350',
				'0351',
				'0352',
				'0354',
				'0355',
				'0356',
				'0357',
				'0358',
				'0361',
				'0365',
				'0366',
				'0367',
				'0368',
				'0369',
				'0370',
				'0371',
				'0373',
				'0374',
				'0378',
				'0381',
				'0382',
				'0385',
				'0387',
				'0390',
				'0392',
				'0393',
				'0394',
				'0395',
				'0397',
				'0398',
				'0399',
				'0400',
				'0402',
				'0403',
				'0404',
				'0406',
				'0407',
				'0410',
				'0413',
				'0414',
			],
		],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0246']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0247']],
		'PHPStan\Type\Php\DateFunctionReturnTypeHelper' => [['0248']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0249']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0250',
				'0264',
				'0267',
				'0268',
				'0275',
				'0280',
				'0303',
				'0310',
				'0313',
				'0314',
				'0338',
				'0348',
				'0353',
				'0359',
				'0375',
				'0379',
				'0380',
				'0388',
				'0391',
				'0408',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0250',
				'0264',
				'0267',
				'0268',
				'0275',
				'0280',
				'0303',
				'0310',
				'0313',
				'0314',
				'0338',
				'0348',
				'0353',
				'0359',
				'0370',
				'0375',
				'0379',
				'0380',
				'0388',
				'0391',
				'0408',
				'0412',
				'0505',
				'0509',
			],
		],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0250']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0251']],
		'PHPStan\Type\Php\RegexArrayShapeMatcher' => [['0252']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [
			['0253', '0273', '0328', '0339', '0377', '0384', '0386', '0409', '0499', '0500', '0501'],
		],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0253']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0254']],
		'PHPStan\Type\OperatorTypeSpecifyingExtension' => [['0255']],
		'PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension' => [['0255']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0256']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0257']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0258']],
		'PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension' => [['0259']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0260']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [
			['0261', '0262', '0276', '0301', '0334', '0344', '0376', '0401'],
		],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0261']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0262']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0263']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0264']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0265']],
		'PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension' => [['0266']],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0267']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0268']],
		'PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension' => [['0269']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0270']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0271']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeHelper' => [['0272']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0273']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0274']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0275']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0276']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0277']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0278']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0279']],
		'PHPStan\Type\Php\PregMatchTypeSpecifyingExtension' => [['0280']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0281']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0282']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0283']],
		'PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension' => [['0284']],
		'PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension' => [['0285']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0286']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension' => [['0287']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0288']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0289']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0290']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0291']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['0292', '0460', '0461', '0463', '0502']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0292']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0293']],
		'PHPStan\Type\Php\FilterFunctionReturnTypeHelper' => [['0294']],
		'PHPStan\Type\Php\ArrayColumnHelper' => [['0295']],
		'PHPStan\Type\FunctionParameterClosureTypeExtension' => [['0296']],
		'PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension' => [['0296']],
		'PHPStan\Type\FunctionParameterOutTypeExtension' => [['0297', '0383', '0411']],
		'PHPStan\Type\Php\ParseStrParameterOutTypeExtension' => [['0297']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0298']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0299']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0300']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0301']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0302']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0303']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0304']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0305']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0306']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0307']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0308']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0309']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0310']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0311']],
		'PHPStan\Type\DynamicMethodThrowTypeExtension' => [['0312', '0315', '0364']],
		'PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension' => [['0312']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0313']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0314']],
		'PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension' => [['0315']],
		'PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension' => [['0316']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0317']],
		'PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension' => [['0318']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0319']],
		'PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension' => [['0320']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0321']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0322']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0323']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0324', '0326', '0360', '0389', '0405']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension' => [['0324']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0325']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0326']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeExtension' => [['0327']],
		'PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension' => [['0328']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0329']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0330']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper' => [['0331']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0332']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0333']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0334']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0335']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0336']],
		'PHPStan\Type\Php\IniGetReturnTypeExtension' => [['0337']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0338']],
		'PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension' => [['0339']],
		'PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension' => [['0340']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0341']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0342']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0343']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0344']],
		'PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension' => [['0345']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0346']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0347']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0348']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0349']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0350']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0351']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0352']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0353']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0354']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0355']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0356']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0357']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0358']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0359']],
		'PHPStan\Type\Php\FilterVarThrowTypeExtension' => [['0360']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0361']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0362']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0363']],
		'PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension' => [['0364']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0365']],
		'PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension' => [['0366']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0367']],
		'PHPStan\Type\Php\GettypeFunctionReturnTypeExtension' => [['0368']],
		'PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension' => [['0369']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0370']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0371']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0372']],
		'PHPStan\Type\Php\StrrevFunctionReturnTypeExtension' => [['0373']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0374']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0375']],
		'PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension' => [['0376']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0377']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0378']],
		'PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension' => [['0379']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0380']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0381']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0382']],
		'PHPStan\Type\Php\PregMatchParameterOutTypeExtension' => [['0383']],
		'PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension' => [['0384']],
		'PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension' => [['0385']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0386']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0387']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0388']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0389']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0390']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0391']],
		'PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension' => [['0392']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0393']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0394']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0395']],
		'PHPStan\Type\Php\ConstantHelper' => [['0396']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0397']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0398']],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0399']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0400']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0401']],
		'PHPStan\Type\Php\ConstantFunctionReturnTypeExtension' => [['0402']],
		'PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension' => [['0403']],
		'PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension' => [['0404']],
		'PHPStan\Type\Php\AssertThrowTypeExtension' => [['0405']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0406']],
		'PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension' => [['0407']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0408']],
		'PHPStan\Type\Php\PDOConnectReturnTypeExtension' => [['0409']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0410']],
		'PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension' => [['0411']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0412', '0505']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0412']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0413']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0414']],
		'PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension' => [['0415']],
		'PHPStan\Type\FileTypeMapper' => [0 => ['0416'], 2 => [1 => 'stubFileTypeMapper']],
		'PHPStan\Process\CpuCoreCounter' => [['0417']],
		'PHPStan\DependencyInjection\Container' => [['0421'], ['0418']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['0418']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['0419']],
		'PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider' => [['0419']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['0420']],
		'PHPStan\DependencyInjection\MemoizingContainer' => [['0421']],
		'PHPStan\DependencyInjection\Type\ParameterClosureTypeExtensionProvider' => [['0422']],
		'PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider' => [['0422']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['0423']],
		'PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider' => [['0423']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['0424']],
		'PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider' => [['0424']],
		'PHPStan\DependencyInjection\Type\ParameterOutTypeExtensionProvider' => [['0425']],
		'PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider' => [['0425']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['0426']],
		'PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider' => [['0426']],
		'PHPStan\DependencyInjection\Type\ParameterClosureThisExtensionProvider' => [['0427']],
		'PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider' => [['0427']],
		'PHPStan\DependencyInjection\Type\ExpressionTypeResolverExtensionRegistryProvider' => [['0428']],
		'PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider' => [['0428']],
		'PHPStan\Collectors\RegistryFactory' => [['0429']],
		'PHPStan\Collectors\Registry' => [['0430']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['0431']],
		'PHPStan\Php\PhpVersionFactory' => [['0432']],
		'PHPStan\Php\PhpVersion' => [['0433']],
		'PHPStan\Php\ComposerPhpVersionFactory' => [['0434']],
		'PHPStan\Parallel\ParallelAnalyser' => [['0435']],
		'PHPStan\Diagnose\DiagnoseExtension' => [0 => ['0436'], 2 => [1 => 'phpstanDiagnoseExtension']],
		'PHPStan\Parallel\Scheduler' => [['0436']],
		'PHPStan\File\SimpleRelativePathHelper' => [2 => ['simpleRelativePathHelper']],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [0 => ['reflectionProvider'], 2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\File\FileExcluderRawFactory' => [['0437']],
		'PHPStan\Reflection\ClassReflectionFactory' => [['0438']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['0439']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['0440']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['0441']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['0442']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['0443']],
		'PHPStan\Analyser\Generator\InternalGeneratorScopeFactory' => [['0444']],
		'PHPStan\Analyser\InternalScopeFactoryFactory' => [['0445']],
		'PhpParser\BuilderFactory' => [['0446']],
		'PhpParser\NodeVisitor\NameResolver' => [['0447']],
		'PHPStan\PhpDocParser\ParserConfig' => [['0448']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['0449']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['0450']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['0451']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['0452']],
		'PHPStan\PhpDocParser\Printer\Printer' => [['0453']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0454', '0455']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0454']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0455']],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [2 => ['originalBetterReflectionReflector']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['0456']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['0457']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['0458']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['0459', '0462', '0464', '0465', '0503']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['0459']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['0460']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['0461']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['0462']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['0463']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['0464']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension' => [['0465']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension' => [['0466']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0467']],
		'PHPStan\Diagnose\PHPStanDiagnoseExtension' => [2 => ['phpstanDiagnoseExtension']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0468', '0469', '0470', '0471', '0472']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0473', '0474']],
		'PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension' => [['0475', '0476']],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension' => [
			['0477', '0478'],
		],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'php8Parser',
				'currentPhpVersionSimpleDirectParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionRichParser',
				'pathRoutingParser',
				'defaultAnalysisParser',
				'freshStubParser',
				'stubParser',
			],
		],
		'PHPStan\Parser\SimpleParser' => [2 => ['php8Parser', 'currentPhpVersionSimpleDirectParser']],
		'PhpParser\Lexer' => [2 => ['php8Lexer', 'currentPhpVersionLexer']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser']],
		'PhpParser\Parser' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser', 'phpParserDecorator']],
		'PhpParser\Parser\Php8' => [2 => ['php8PhpParser']],
		'PHPStan\Parser\PhpParserFactory' => [2 => ['currentPhpVersionPhpParserFactory']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser', 'stubParser']],
		'PHPStan\Parser\StubParser' => [2 => ['freshStubParser']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0479']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0480']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule' => [['0481']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0482']],
		'PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule' => [['0483']],
		'mglaman\PHPStanDrupal\Drupal\ServiceMap' => [['0484']],
		'mglaman\PHPStanDrupal\Drupal\ExtensionMap' => [['0485']],
		'mglaman\PHPStanDrupal\Drupal\EntityDataRepository' => [['0486']],
		'mglaman\PHPStanDrupal\Type\EntityIdNarrowedByNew' => [['0487']],
		'mglaman\PHPStanDrupal\Type\EntityTypeKeyByExistence' => [['0488']],
		'mglaman\PHPStanDrupal\Type\EntityTypeLinkTemplateByExistence' => [['0489']],
		'mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension' => [['0490']],
		'mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension' => [['0491']],
		'mglaman\PHPStanDrupal\Type\EntityRepositoryReturnTypeExtension' => [['0492']],
		'mglaman\PHPStanDrupal\Type\EntityStorage\GetQueryReturnTypeExtension' => [['0493']],
		'mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension' => [['0494']],
		'mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension' => [['0495']],
		'mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension' => [['0496']],
		'mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryAccessCheckDynamicReturnTypeExtension' => [['0497']],
		'mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension' => [['0498']],
		'mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension' => [['0499']],
		'mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension' => [['0500']],
		'mglaman\PHPStanDrupal\Type\DrupalStaticEntityQueryDynamicReturnTypeExtension' => [['0501']],
		'mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension' => [['0502']],
		'mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension' => [['0503']],
		'mglaman\PHPStanDrupal\Drupal\DrupalStubFilesExtension' => [['0504']],
		'mglaman\PHPStanDrupal\Type\EntityQuery\AccessCheckTypeSpecifyingExtension' => [['0505']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeResolver' => [['0506', '0507', '0508', '0512']],
		'mglaman\PHPStanDrupal\DeprecatedScope\GroupLegacyScope' => [['0506']],
		'mglaman\PHPStanDrupal\DeprecatedScope\IgnoreDeprecationsScope' => [['0507']],
		'mglaman\PHPStanDrupal\DeprecatedScope\DeprecationHelperScope' => [['0508']],
		'PHPStan\Type\StaticMethodTypeSpecifyingExtension' => [['0509']],
		'mglaman\PHPStanDrupal\Type\InspectorTypeExtension' => [['0509']],
		'PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider' => [['0510']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeHelper' => [['0511']],
		'PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver' => [['0512']],
		'PHPStan\Rules\Deprecations\CallWithDeprecatedIniOptionRule' => [['0513']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageExtension' => [['0514']],
		'PHPStan\Rules\Deprecations\RestrictedDeprecatedClassConstantUsageExtension' => [['0514']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageExtension' => [['0515']],
		'PHPStan\Rules\Deprecations\RestrictedDeprecatedFunctionUsageExtension' => [['0515']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageExtension' => [['0516']],
		'PHPStan\Rules\Deprecations\RestrictedDeprecatedMethodUsageExtension' => [['0516']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageExtension' => [['0517']],
		'PHPStan\Rules\Deprecations\RestrictedDeprecatedPropertyUsageExtension' => [['0517']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassNameUsageExtension' => [['0518']],
		'PHPStan\Rules\Deprecations\RestrictedDeprecatedClassNameUsageExtension' => [['0518']],
		'mglaman\PHPStanDrupal\Rules\Drupal\HookFormAlterRule' => [['0519']],
		'mglaman\PHPStanDrupal\Rules\Drupal\Tests\TestClassSuffixNameRule' => [['0520']],
		'mglaman\PHPStanDrupal\Rules\Drupal\DependencySerializationTraitPropertyRule' => [['0521']],
		'mglaman\PHPStanDrupal\Rules\Drupal\AccessResultConditionRule' => [['0522']],
		'mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule' => [['0523']],
		'mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule' => [['0524']],
		'mglaman\PHPStanDrupal\Rules\Drupal\CacheableDependencyRule' => [['0525']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('0456'));
	}


	public function createService02(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('0416'),
			$this->getService('0126')
		);
	}


	public function createService03(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('05'),
			$this->getService('reflectionProvider'),
			$this->getService('02'),
			$this->getService('0416')
		);
	}


	public function createService04(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory(
			$this->getService('0437'),
			[
				'analyseAndScan' => [
					'*.api.php',
					'*/tests/fixtures/*.php',
					'*/tests/Drupal/Tests/Listeners/Legacy/*',
					'*/tests/fixtures/*.php',
					'*/settings*.php',
					'*/bower_components/*',
					'*/node_modules/*',
				],
				'analyse' => [],
			]
		);
	}


	public function createService05(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/var/www/html');
	}


	public function createService06(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor(
			$this->getService('fileFinderAnalyse'),
			$this->getService('fileFinderScan'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('analysedPathsFromConfig'),
			['/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub'],
			[]
		);
	}


	public function createService07(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('0115'),
			$this->getService('028'),
			$this->getService('0433'),
			$this->getService('0424'),
			$this->getService('0245'),
			false
		);
	}


	public function createService08(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('013'),
			$this->getService('07'),
			$this->getService('0433'),
			false
		);
	}


	public function createService09(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('08'),
			$this->getService('018'),
			$this->getService('0416'),
			$this->getService('0433'),
			$this->getService('07'),
			$this->getService('028')
		);
	}


	public function createService010(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('011')->create();
	}


	public function createService011(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('0433'),
			$this->getService('08'),
			$this->getService('09')
		);
	}


	public function createService012(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('010'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0416'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('024')
		);
	}


	public function createService013(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('0160'));
	}


	public function createService014(): PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory(
			$this->getService('0125'),
			$this->getService('0433')
		);
	}


	public function createService015(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('0125'),
			$this->getService('0433')
		);
	}


	public function createService016(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0454'),
			$this->getService('0455'),
			$this->getService('022'),
			$this->getService('020'),
			$this->getService('019'),
			$this->getService('0440'),
			$this->getService('018'),
			['/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub'],
			[],
			$this->getParameter('analysedPaths'),
			['/var/www/html'],
			$this->getParameter('analysedPathsFromConfig'),
			false,
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createService017(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService018(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('0457'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService019(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('020'),
			$this->getService('0440'),
			$this->getService('021'),
			$this->getService('0433')
		);
	}


	public function createService020(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('021'));
	}


	public function createService021(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('018'),
			$this->getService('fileFinderScan'),
			$this->getService('0433'),
			$this->getService('0119')
		);
	}


	public function createService022(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('0439'));
	}


	public function createService023(): PHPStan\Reflection\Deprecation\DeprecationProvider
	{
		return new PHPStan\Reflection\Deprecation\DeprecationProvider($this->getService('0421'));
	}


	public function createService024(): PHPStan\Reflection\AttributeReflectionFactory
	{
		return new PHPStan\Reflection\AttributeReflectionFactory($this->getService('07'), $this->getService('028'));
	}


	public function createService025(): PHPStan\Reflection\ConstructorsHelper
	{
		return new PHPStan\Reflection\ConstructorsHelper($this->getService('0421'), []);
	}


	public function createService026(): PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension;
	}


	public function createService027(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService028(): PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('0421'));
	}


	public function createService029(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('0112'),
			$this->getService('registry'),
			$this->getService('0430'),
			$this->getService('0111'),
			50
		);
	}


	public function createService030(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer($this->getService('currentPhpVersionPhpParser'));
	}


	public function createService031(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer('/var/www/html/tmp/upgrade_status/phpstan/resultCache.php');
	}


	public function createService032(): PHPStan\Analyser\LocalIgnoresProcessor
	{
		return new PHPStan\Analyser\LocalIgnoresProcessor;
	}


	public function createService033(): PHPStan\Analyser\Generator\AssignHelper
	{
		return new PHPStan\Analyser\Generator\AssignHelper;
	}


	public function createService034(): PHPStan\Analyser\Generator\NodeHandler\ParamHandler
	{
		return new PHPStan\Analyser\Generator\NodeHandler\ParamHandler;
	}


	public function createService035(): PHPStan\Analyser\Generator\NodeHandler\StmtsHandler
	{
		return new PHPStan\Analyser\Generator\NodeHandler\StmtsHandler;
	}


	public function createService036(): PHPStan\Analyser\Generator\NodeHandler\PropertyHooksHandler
	{
		return new PHPStan\Analyser\Generator\NodeHandler\PropertyHooksHandler(
			$this->getService('040'),
			$this->getService('034'),
			$this->getService('038')
		);
	}


	public function createService037(): PHPStan\Analyser\Generator\NodeHandler\AttrGroupsHandler
	{
		return new PHPStan\Analyser\Generator\NodeHandler\AttrGroupsHandler(
			$this->getService('reflectionProvider'),
			$this->getService('039')
		);
	}


	public function createService038(): PHPStan\Analyser\Generator\NodeHandler\DeprecatedAttributeHelper
	{
		return new PHPStan\Analyser\Generator\NodeHandler\DeprecatedAttributeHelper($this->getService('07'));
	}


	public function createService039(): PHPStan\Analyser\Generator\NodeHandler\ArgsHandler
	{
		return new PHPStan\Analyser\Generator\NodeHandler\ArgsHandler(
			$this->getService('0422'),
			$this->getService('0427'),
			$this->getService('0425'),
			$this->getService('033'),
			$this->getService('056'),
			$this->getService('083'),
			$this->getService('061'),
			$this->getService('096'),
			true
		);
	}


	public function createService040(): PHPStan\Analyser\Generator\NodeHandler\StatementPhpDocsHelper
	{
		return new PHPStan\Analyser\Generator\NodeHandler\StatementPhpDocsHelper($this->getService('0162'), $this->getService('0416'));
	}


	public function createService041(): PHPStan\Analyser\Generator\NodeHandler\VarAnnotationHelper
	{
		return new PHPStan\Analyser\Generator\NodeHandler\VarAnnotationHelper($this->getService('0416'));
	}


	public function createService042(): PHPStan\Analyser\Generator\StmtHandler\NamespaceHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\NamespaceHandler;
	}


	public function createService043(): PHPStan\Analyser\Generator\StmtHandler\TraitHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\TraitHandler;
	}


	public function createService044(): PHPStan\Analyser\Generator\StmtHandler\EchoHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\EchoHandler;
	}


	public function createService045(): PHPStan\Analyser\Generator\StmtHandler\UseHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\UseHandler;
	}


	public function createService046(): PHPStan\Analyser\Generator\StmtHandler\IfHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\IfHandler(true);
	}


	public function createService047(): PHPStan\Analyser\Generator\StmtHandler\DeclareHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\DeclareHandler;
	}


	public function createService048(): PHPStan\Analyser\Generator\StmtHandler\ClassMethodHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ClassMethodHandler(
			$this->getService('040'),
			$this->getService('034'),
			$this->getService('038'),
			$this->getService('036'),
			true
		);
	}


	public function createService049(): PHPStan\Analyser\Generator\StmtHandler\ClassLikeHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ClassLikeHandler(
			$this->getService('reflectionProvider'),
			$this->getService('0167'),
			$this->getService('0438'),
			$this->getService('nodeScopeResolverReflector'),
			true
		);
	}


	public function createService050(): PHPStan\Analyser\Generator\StmtHandler\FunctionHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\FunctionHandler(
			$this->getService('040'),
			$this->getService('034'),
			$this->getService('038')
		);
	}


	public function createService051(): PHPStan\Analyser\Generator\StmtHandler\ReturnHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ReturnHandler;
	}


	public function createService052(): PHPStan\Analyser\Generator\StmtHandler\ExpressionHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ExpressionHandler($this->getService('reflectionProvider'), [], []);
	}


	public function createService053(): PHPStan\Analyser\Generator\StmtHandler\PropertyHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\PropertyHandler($this->getService('040'), $this->getService('036'));
	}


	public function createService054(): PHPStan\Analyser\Generator\StmtHandler\NopHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\NopHandler;
	}


	public function createService055(): PHPStan\Analyser\Generator\StmtHandler\ContinueBreakHandler
	{
		return new PHPStan\Analyser\Generator\StmtHandler\ContinueBreakHandler;
	}


	public function createService056(): PHPStan\Analyser\Generator\VirtualAssignHelper
	{
		return new PHPStan\Analyser\Generator\VirtualAssignHelper($this->getService('071'));
	}


	public function createService057(): PHPStan\Analyser\Generator\GeneratorNodeScopeResolver
	{
		return new PHPStan\Analyser\Generator\GeneratorNodeScopeResolver(
			$this->getService('0126'),
			$this->getService('041'),
			$this->getService('0421')
		);
	}


	public function createService058(): PHPStan\Analyser\Generator\SpecifiedTypesHelper
	{
		return new PHPStan\Analyser\Generator\SpecifiedTypesHelper($this->getService('0126'));
	}


	public function createService059(): PHPStan\Analyser\Generator\GeneratorScopeFactory
	{
		return new PHPStan\Analyser\Generator\GeneratorScopeFactory($this->getService('0444'));
	}


	public function createService060(): PHPStan\Analyser\Generator\ExprHandler\SpaceshipHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\SpaceshipHandler($this->getService('07'));
	}


	public function createService061(): PHPStan\Analyser\Generator\ExprHandler\ArrowFunctionHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ArrowFunctionHandler($this->getService('066'), $this->getService('034'));
	}


	public function createService062(): PHPStan\Analyser\Generator\ExprHandler\BitwiseNotHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BitwiseNotHandler($this->getService('07'));
	}


	public function createService063(): PHPStan\Analyser\Generator\ExprHandler\StaticCallHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\StaticCallHandler(
			$this->getService('039'),
			$this->getService('0423'),
			$this->getService('085'),
			$this->getService('068'),
			$this->getService('087'),
			true
		);
	}


	public function createService064(): PHPStan\Analyser\Generator\ExprHandler\CastIntHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\CastIntHandler;
	}


	public function createService065(): PHPStan\Analyser\Generator\ExprHandler\FuncCallHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\FuncCallHandler($this->getService('reflectionProvider'));
	}


	public function createService066(): PHPStan\Analyser\Generator\ExprHandler\ClosureHelper
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ClosureHelper($this->getService('07'));
	}


	public function createService067(): PHPStan\Analyser\Generator\ExprHandler\BooleanNotHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BooleanNotHandler;
	}


	public function createService068(): PHPStan\Analyser\Generator\ExprHandler\MethodCallHelper
	{
		return new PHPStan\Analyser\Generator\ExprHandler\MethodCallHelper($this->getService('0426'));
	}


	public function createService069(): PHPStan\Analyser\Generator\ExprHandler\BinaryModHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryModHandler($this->getService('07'));
	}


	public function createService070(): PHPStan\Analyser\Generator\ExprHandler\CastBoolHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\CastBoolHandler;
	}


	public function createService071(): PHPStan\Analyser\Generator\ExprHandler\AssignHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\AssignHandler(
			$this->getService('0433'),
			$this->getService('033'),
			$this->getService('041'),
			true
		);
	}


	public function createService072(): PHPStan\Analyser\Generator\ExprHandler\ConstFetchHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ConstFetchHandler($this->getService('0115'), $this->getService('058'));
	}


	public function createService073(): PHPStan\Analyser\Generator\ExprHandler\Virtual\TypeExprHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\Virtual\TypeExprHandler;
	}


	public function createService074(): PHPStan\Analyser\Generator\ExprHandler\UnaryMinusHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\UnaryMinusHandler($this->getService('07'));
	}


	public function createService075(): PHPStan\Analyser\Generator\ExprHandler\NotEqualHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\NotEqualHandler;
	}


	public function createService076(): PHPStan\Analyser\Generator\ExprHandler\BitwiseXorHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BitwiseXorHandler($this->getService('07'));
	}


	public function createService077(): PHPStan\Analyser\Generator\ExprHandler\BitwiseOrHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BitwiseOrHandler($this->getService('07'));
	}


	public function createService078(): PHPStan\Analyser\Generator\ExprHandler\MethodCallHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\MethodCallHandler;
	}


	public function createService079(): PHPStan\Analyser\Generator\ExprHandler\NewHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\NewHandler(
			$this->getService('reflectionProvider'),
			$this->getService('039'),
			$this->getService('0423'),
			$this->getService('0426'),
			true
		);
	}


	public function createService080(): PHPStan\Analyser\Generator\ExprHandler\BinaryPlusHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryPlusHandler($this->getService('07'));
	}


	public function createService081(): PHPStan\Analyser\Generator\ExprHandler\CastStringHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\CastStringHandler;
	}


	public function createService082(): PHPStan\Analyser\Generator\ExprHandler\BinaryShiftRightHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryShiftRightHandler($this->getService('07'));
	}


	public function createService083(): PHPStan\Analyser\Generator\ExprHandler\ClosureHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ClosureHandler($this->getService('066'), $this->getService('034'));
	}


	public function createService084(): PHPStan\Analyser\Generator\ExprHandler\CastArrayHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\CastArrayHandler;
	}


	public function createService085(): PHPStan\Analyser\Generator\ExprHandler\NullsafeShortCircuitingHelper
	{
		return new PHPStan\Analyser\Generator\ExprHandler\NullsafeShortCircuitingHelper;
	}


	public function createService086(): PHPStan\Analyser\Generator\ExprHandler\BinaryMinusHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryMinusHandler($this->getService('07'));
	}


	public function createService087(): PHPStan\Analyser\Generator\ExprHandler\VoidTypeHelper
	{
		return new PHPStan\Analyser\Generator\ExprHandler\VoidTypeHelper;
	}


	public function createService088(): PHPStan\Analyser\Generator\ExprHandler\MagicConstHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\MagicConstHandler($this->getService('07'));
	}


	public function createService089(): PHPStan\Analyser\Generator\ExprHandler\CastDoubleHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\CastDoubleHandler;
	}


	public function createService090(): PHPStan\Analyser\Generator\ExprHandler\UnaryPlusHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\UnaryPlusHandler;
	}


	public function createService091(): PHPStan\Analyser\Generator\ExprHandler\EqualHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\EqualHandler(
			$this->getService('07'),
			$this->getService('058'),
			$this->getService('0126')
		);
	}


	public function createService092(): PHPStan\Analyser\Generator\ExprHandler\BinaryPowHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryPowHandler($this->getService('07'));
	}


	public function createService093(): PHPStan\Analyser\Generator\ExprHandler\CastObjectHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\CastObjectHandler($this->getService('07'));
	}


	public function createService094(): PHPStan\Analyser\Generator\ExprHandler\IdenticalHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\IdenticalHandler(
			$this->getService('07'),
			$this->getService('058'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService095(): PHPStan\Analyser\Generator\ExprHandler\BinaryDivHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryDivHandler($this->getService('07'));
	}


	public function createService096(): PHPStan\Analyser\Generator\ExprHandler\ImmediatelyCalledCallableHelper
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ImmediatelyCalledCallableHelper;
	}


	public function createService097(): PHPStan\Analyser\Generator\ExprHandler\ScalarIntHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ScalarIntHandler;
	}


	public function createService098(): PHPStan\Analyser\Generator\ExprHandler\ScalarFloatHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ScalarFloatHandler;
	}


	public function createService099(): PHPStan\Analyser\Generator\ExprHandler\ClassConstFetchHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ClassConstFetchHandler;
	}


	public function createService0100(): PHPStan\Analyser\Generator\ExprHandler\BinaryShiftLeftHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryShiftLeftHandler($this->getService('07'));
	}


	public function createService0101(): PHPStan\Analyser\Generator\ExprHandler\ScalarStringHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\ScalarStringHandler;
	}


	public function createService0102(): PHPStan\Analyser\Generator\ExprHandler\BinaryMulHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryMulHandler($this->getService('07'));
	}


	public function createService0103(): PHPStan\Analyser\Generator\ExprHandler\NotIdenticalHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\NotIdenticalHandler;
	}


	public function createService0104(): PHPStan\Analyser\Generator\ExprHandler\InterpolatedStringHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\InterpolatedStringHandler($this->getService('07'));
	}


	public function createService0105(): PHPStan\Analyser\Generator\ExprHandler\LiteralArrayHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\LiteralArrayHandler($this->getService('0433'));
	}


	public function createService0106(): PHPStan\Analyser\Generator\ExprHandler\VariableHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\VariableHandler($this->getService('058'));
	}


	public function createService0107(): PHPStan\Analyser\Generator\ExprHandler\BitwiseAndHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BitwiseAndHandler($this->getService('07'));
	}


	public function createService0108(): PHPStan\Analyser\Generator\ExprHandler\BinaryConcatHandler
	{
		return new PHPStan\Analyser\Generator\ExprHandler\BinaryConcatHandler($this->getService('07'));
	}


	public function createService0109(): PHPStan\Analyser\IgnoreErrorExtensionProvider
	{
		return new PHPStan\Analyser\IgnoreErrorExtensionProvider($this->getService('0421'));
	}


	public function createService0110(): PHPStan\Analyser\RicherScopeGetTypeHelper
	{
		return new PHPStan\Analyser\RicherScopeGetTypeHelper($this->getService('07'), $this->getService('0169'));
	}


	public function createService0111(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('07'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('0438'),
			$this->getService('0425'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0416'),
			$this->getService('0433'),
			$this->getService('0162'),
			$this->getService('05'),
			$this->getService('typeSpecifier'),
			$this->getService('0423'),
			$this->getService('0167'),
			$this->getService('0427'),
			$this->getService('0422'),
			$this->getService('0113'),
			true,
			true,
			true,
			[],
			[],
			true,
			true,
			true
		);
	}


	public function createService0112(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('0113'),
			$this->getService('059'),
			$this->getService('0111'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('03'),
			$this->getService('0109'),
			$this->getService('030'),
			$this->getService('032')
		);
	}


	public function createService0113(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('0445'));
	}


	public function createService0114(): PHPStan\Analyser\AnalyserResultFinalizer
	{
		return new PHPStan\Analyser\AnalyserResultFinalizer(
			$this->getService('registry'),
			$this->getService('0109'),
			$this->getService('030'),
			$this->getService('0113'),
			$this->getService('032'),
			false
		);
	}


	public function createService0115(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('0118')->create();
	}


	public function createService0116(): PHPStan\Analyser\Ignore\IgnoreLexer
	{
		return new PHPStan\Analyser\Ignore\IgnoreLexer;
	}


	public function createService0117(): PHPStan\Analyser\Ignore\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\Ignore\IgnoredErrorHelper(
			$this->getService('05'),
			[
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			false
		);
	}


	public function createService0118(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('028'), $this->getService('0421'));
	}


	public function createService0119(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService0120(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('06'),
			$this->getService('0117'),
			$this->getService('0157'),
			$this->getParameter('analysedPaths'),
			'/var/www/html',
			($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
			['1.1.1.2'],
			['/var/www/html'],
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'/var/www/html/tmp/upgrade_status/deprecation_testing.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/extension.neon',
				'/var/www/html/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/rules.neon',
			],
			null,
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
			],
			null,
			'0'
		);
	}


	public function createService0121(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('0436'),
			$this->getService('029'),
			$this->getService('0435'),
			$this->getService('0417')
		);
	}


	public function createService0122(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('0121'),
			$this->getService('0114'),
			$this->getService('0155'),
			$this->getService('0443'),
			$this->getService('0117'),
			$this->getService('0157')
		);
	}


	public function createService0123(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService0124(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('05'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService0125(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService0126(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('0125'));
	}


	public function createService0127(): PHPStan\Parser\TypeTraverserInstanceofVisitor
	{
		return new PHPStan\Parser\TypeTraverserInstanceofVisitor;
	}


	public function createService0128(): PHPStan\Parser\VariadicFunctionsVisitor
	{
		return new PHPStan\Parser\VariadicFunctionsVisitor;
	}


	public function createService0129(): PHPStan\Parser\ArrayFindArgVisitor
	{
		return new PHPStan\Parser\ArrayFindArgVisitor;
	}


	public function createService0130(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService0131(): PHPStan\Parser\ImplodeArgVisitor
	{
		return new PHPStan\Parser\ImplodeArgVisitor;
	}


	public function createService0132(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('0433'));
	}


	public function createService0133(): PHPStan\Parser\ClosureBindToVarVisitor
	{
		return new PHPStan\Parser\ClosureBindToVarVisitor;
	}


	public function createService0134(): PHPStan\Parser\ImmediatelyInvokedClosureVisitor
	{
		return new PHPStan\Parser\ImmediatelyInvokedClosureVisitor;
	}


	public function createService0135(): PHPStan\Parser\MagicConstantParamDefaultVisitor
	{
		return new PHPStan\Parser\MagicConstantParamDefaultVisitor;
	}


	public function createService0136(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService0137(): PHPStan\Parser\DeclarePositionVisitor
	{
		return new PHPStan\Parser\DeclarePositionVisitor;
	}


	public function createService0138(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService0139(): PHPStan\Parser\AnonymousClassVisitor
	{
		return new PHPStan\Parser\AnonymousClassVisitor;
	}


	public function createService0140(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService0141(): PHPStan\Parser\VariadicMethodsVisitor
	{
		return new PHPStan\Parser\VariadicMethodsVisitor;
	}


	public function createService0142(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService0143(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService0144(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService0145(): PHPStan\Parser\ClosureBindArgVisitor
	{
		return new PHPStan\Parser\ClosureBindArgVisitor;
	}


	public function createService0146(): PHPStan\Parser\CurlSetOptArrayArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArrayArgVisitor;
	}


	public function createService0147(): PHPStan\Parser\LastConditionVisitor
	{
		return new PHPStan\Parser\LastConditionVisitor;
	}


	public function createService0148(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService0149(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService0150(): PHPStan\Parser\StandaloneThrowExprVisitor
	{
		return new PHPStan\Parser\StandaloneThrowExprVisitor;
	}


	public function createService0151(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('0153'), $this->getService('0152'), $this->getService('0220'));
	}


	public function createService0152(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver($this->getService('028'), $this->getService('07'));
	}


	public function createService0153(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('0156'),
			$this->getService('028'),
			$this->getService('0239'),
			$this->getService('0115'),
			$this->getService('07')
		);
	}


	public function createService0154(): PHPStan\PhpDoc\BcMathNumberStubFilesExtension
	{
		return new PHPStan\PhpDoc\BcMathNumberStubFilesExtension($this->getService('0433'));
	}


	public function createService0155(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('0420'));
	}


	public function createService0156(): PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('0421'));
	}


	public function createService0157(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('0421'),
			$this->getService('05'),
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/file.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_client.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_server.stub',
			],
			['/var/www/html']
		);
	}


	public function createService0158(): PHPStan\PhpDoc\SocketSelectStubFilesExtension
	{
		return new PHPStan\PhpDoc\SocketSelectStubFilesExtension($this->getService('0433'));
	}


	public function createService0159(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('0449'), $this->getService('0452'));
	}


	public function createService0160(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('0449'), $this->getService('0450'), $this->getService('0153'));
	}


	public function createService0161(): PHPStan\PhpDoc\JsonValidateStubFilesExtension
	{
		return new PHPStan\PhpDoc\JsonValidateStubFilesExtension($this->getService('0433'));
	}


	public function createService0162(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0416'), $this->getService('stubPhpDocProvider'));
	}


	public function createService0163(): PHPStan\PhpDoc\ReflectionClassStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionClassStubFilesExtension($this->getService('0433'));
	}


	public function createService0164(): PHPStan\PhpDoc\ReflectionEnumStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionEnumStubFilesExtension($this->getService('0433'));
	}


	public function createService0165(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0166(): PHPStan\Rules\Properties\AccessStaticPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0185'),
			$this->getService('0177'),
			$this->getService('0433'),
			true
		);
	}


	public function createService0167(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('0421'));
	}


	public function createService0168(): PHPStan\Rules\Properties\AccessPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0185'),
			$this->getService('0433'),
			false,
			false,
			false
		);
	}


	public function createService0169(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0170(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0171(): PHPStan\Rules\ClassForbiddenNameCheck
	{
		return new PHPStan\Rules\ClassForbiddenNameCheck($this->getService('0421'));
	}


	public function createService0172(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0173(): PHPStan\Rules\Debug\DumpPhpDocTypeRule
	{
		return new PHPStan\Rules\Debug\DumpPhpDocTypeRule($this->getService('reflectionProvider'), $this->getService('0453'));
	}


	public function createService0174(): PHPStan\Rules\Debug\DumpNativeTypeRule
	{
		return new PHPStan\Rules\Debug\DumpNativeTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0175(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'), $this->getService('0160'));
	}


	public function createService0176(): PHPStan\Rules\Debug\DebugScopeRule
	{
		return new PHPStan\Rules\Debug\DebugScopeRule($this->getService('reflectionProvider'));
	}


	public function createService0177(): PHPStan\Rules\ClassNameCheck
	{
		return new PHPStan\Rules\ClassNameCheck(
			$this->getService('0178'),
			$this->getService('0171'),
			$this->getService('reflectionProvider'),
			$this->getService('0421')
		);
	}


	public function createService0178(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0179(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0183'),
			$this->getService('0177'),
			true
		);
	}


	public function createService0180(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService0181(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('0180'), true);
	}


	public function createService0182(): PHPStan\Rules\Pure\FunctionPurityCheck
	{
		return new PHPStan\Rules\Pure\FunctionPurityCheck;
	}


	public function createService0183(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0185'),
			$this->getService('0231'),
			$this->getService('0220'),
			$this->getService('0169'),
			false,
			false,
			false,
			false
		);
	}


	public function createService0184(): PHPStan\Rules\Functions\PrintfHelper
	{
		return new PHPStan\Rules\Functions\PrintfHelper($this->getService('0433'));
	}


	public function createService0185(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, true, false, false, false, false, true);
	}


	public function createService0186(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0187(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0188(): PHPStan\Rules\Generics\MethodTagTemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeCheck($this->getService('0416'), $this->getService('0189'));
	}


	public function createService0189(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0177'),
			$this->getService('0187'),
			$this->getService('0241'),
			false
		);
	}


	public function createService0190(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0191(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0187'),
			$this->getService('0190'),
			$this->getService('0220'),
			['DOMNamedNodeMap'],
			false
		);
	}


	public function createService0192(): PHPStan\Rules\ParameterCastableToStringCheck
	{
		return new PHPStan\Rules\ParameterCastableToStringCheck($this->getService('0185'));
	}


	public function createService0193(): PHPStan\Rules\Methods\ParentMethodHelper
	{
		return new PHPStan\Rules\Methods\ParentMethodHelper($this->getService('0458'));
	}


	public function createService0194(): PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider
	{
		return new PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider($this->getService('0421'));
	}


	public function createService0195(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0185'),
			false,
			false
		);
	}


	public function createService0196(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0185'),
			$this->getService('0177'),
			false,
			true,
			false
		);
	}


	public function createService0197(): PHPStan\Rules\Methods\MethodPrototypeFinder
	{
		return new PHPStan\Rules\Methods\MethodPrototypeFinder($this->getService('0433'), $this->getService('0458'));
	}


	public function createService0198(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('0433'));
	}


	public function createService0199(): PHPStan\Rules\Methods\MethodVisibilityComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodVisibilityComparisonHelper;
	}


	public function createService0200(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('0421'));
	}


	public function createService0201(): PHPStan\Rules\TooWideTypehints\TooWideTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideTypeCheck($this->getService('0169'), false, false);
	}


	public function createService0202(): PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck($this->getService('0201'));
	}


	public function createService0203(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(false, ['DOMNamedNodeMap']);
	}


	public function createService0204(): PHPStan\Rules\Classes\MethodTagCheck
	{
		return new PHPStan\Rules\Classes\MethodTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0177'),
			$this->getService('0187'),
			$this->getService('0203'),
			$this->getService('0220'),
			false,
			false,
			true
		);
	}


	public function createService0205(): PHPStan\Rules\Classes\LocalTypeAliasesCheck
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesCheck(
			[],
			$this->getService('reflectionProvider'),
			$this->getService('0153'),
			$this->getService('0203'),
			$this->getService('0177'),
			$this->getService('0220'),
			$this->getService('0187'),
			false,
			false,
			true
		);
	}


	public function createService0206(): PHPStan\Rules\Classes\MixinCheck
	{
		return new PHPStan\Rules\Classes\MixinCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0177'),
			$this->getService('0187'),
			$this->getService('0203'),
			$this->getService('0220'),
			false,
			false,
			true
		);
	}


	public function createService0207(): PHPStan\Rules\Classes\ConsistentConstructorHelper
	{
		return new PHPStan\Rules\Classes\ConsistentConstructorHelper;
	}


	public function createService0208(): PHPStan\Rules\Classes\PropertyTagCheck
	{
		return new PHPStan\Rules\Classes\PropertyTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0177'),
			$this->getService('0187'),
			$this->getService('0203'),
			$this->getService('0220'),
			false,
			false,
			true
		);
	}


	public function createService0209(): PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0210(): PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0211(): PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider'),
			$this->getService('0185')
		);
	}


	public function createService0212(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider'),
			$this->getService('0185')
		);
	}


	public function createService0213(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider'),
			$this->getService('0185')
		);
	}


	public function createService0214(): PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider'),
			$this->getService('0185')
		);
	}


	public function createService0215(): PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0216(): PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0217(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0218(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule(
			$this->getService('0421'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0219(): PHPStan\Rules\PhpDoc\GenericCallableRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\GenericCallableRuleHelper($this->getService('0189'));
	}


	public function createService0220(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0221(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0220'),
			$this->getService('0177'),
			$this->getService('0203'),
			$this->getService('0187'),
			false,
			false
		);
	}


	public function createService0222(): PHPStan\Rules\PhpDoc\RequireExtendsCheck
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsCheck($this->getService('0177'), false, true);
	}


	public function createService0223(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck(
			$this->getService('0187'),
			$this->getService('0220'),
			$this->getService('0219')
		);
	}


	public function createService0224(): PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper(
			$this->getService('0153'),
			$this->getService('0416'),
			$this->getService('reflectionProvider'),
			false,
			false
		);
	}


	public function createService0225(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0226(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService0227(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0185'));
	}


	public function createService0228(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck(true);
	}


	public function createService0229(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService0230(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0231(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0232(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0165'), $this->getService('0169'), false, true);
	}


	public function createService0233(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0177'),
			$this->getService('0220'),
			$this->getService('0433'),
			false,
			true
		);
	}


	public function createService0234(): PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper;
	}


	public function createService0235(): PHPStan\Rules\Playground\NeverRuleHelper
	{
		return new PHPStan\Rules\Playground\NeverRuleHelper;
	}


	public function createService0236(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0185'), false, false, false);
	}


	public function createService0237(): PHPStan\Fixable\PhpDoc\PhpDocEditor
	{
		return new PHPStan\Fixable\PhpDoc\PhpDocEditor($this->getService('0453'), $this->getService('0449'), $this->getService('0452'));
	}


	public function createService0238(): PHPStan\Fixable\Patcher
	{
		return new PHPStan\Fixable\Patcher;
	}


	public function createService0239(): PHPStan\Type\LazyTypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('0421'));
	}


	public function createService0240(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('07'),
			$this->getService('0455'),
			$this->getService('betterReflectionReflector'),
			$this->getService('028'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService0241(): PHPStan\Type\UsefulTypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('0160'),
			$this->getService('0153'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0242(): PHPStan\Type\Regex\RegexGroupParser
	{
		return new PHPStan\Type\Regex\RegexGroupParser($this->getService('0433'), $this->getService('0243'));
	}


	public function createService0243(): PHPStan\Type\Regex\RegexExpressionHelper
	{
		return new PHPStan\Type\Regex\RegexExpressionHelper($this->getService('07'));
	}


	public function createService0244(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0245(): PHPStan\Type\Constant\OversizedArrayBuilder
	{
		return new PHPStan\Type\Constant\OversizedArrayBuilder;
	}


	public function createService0246(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0247(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0248(): PHPStan\Type\Php\DateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeHelper;
	}


	public function createService0249(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0250(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0251(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0252(): PHPStan\Type\Php\RegexArrayShapeMatcher
	{
		return new PHPStan\Type\Php\RegexArrayShapeMatcher(
			$this->getService('0242'),
			$this->getService('0243'),
			$this->getService('0433')
		);
	}


	public function createService0253(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0254(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0255(): PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension($this->getService('0433'));
	}


	public function createService0256(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0257(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0258(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0259(): PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFirstLastDynamicReturnTypeExtension;
	}


	public function createService0260(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0261(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension($this->getService('0433'));
	}


	public function createService0262(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0263(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0264(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0265(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0266(): PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension;
	}


	public function createService0267(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension($this->getService('0433'));
	}


	public function createService0268(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0269(): PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0270(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0271(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0272(): PHPStan\Type\Php\IdateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeHelper;
	}


	public function createService0273(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0274(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('0433'));
	}


	public function createService0275(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0276(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0277(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0278(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0279(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0280(): PHPStan\Type\Php\PregMatchTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PregMatchTypeSpecifyingExtension($this->getService('0252'));
	}


	public function createService0281(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0282(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension($this->getService('0248'));
	}


	public function createService0283(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0284(): PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension;
	}


	public function createService0285(): PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension;
	}


	public function createService0286(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0287(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension($this->getService('0331'));
	}


	public function createService0288(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0289(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0290(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0291(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0292(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0293(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0294(): PHPStan\Type\Php\FilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\FilterFunctionReturnTypeHelper($this->getService('reflectionProvider'), $this->getService('0433'));
	}


	public function createService0295(): PHPStan\Type\Php\ArrayColumnHelper
	{
		return new PHPStan\Type\Php\ArrayColumnHelper($this->getService('0433'));
	}


	public function createService0296(): PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension
	{
		return new PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension($this->getService('0252'));
	}


	public function createService0297(): PHPStan\Type\Php\ParseStrParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\ParseStrParameterOutTypeExtension;
	}


	public function createService0298(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0299(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(false);
	}


	public function createService0300(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0301(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0302(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension($this->getService('0248'));
	}


	public function createService0303(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0304(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0305(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0306(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0307(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0308(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0309(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0244'));
	}


	public function createService0310(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0362'));
	}


	public function createService0311(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0312(): PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension($this->getService('0433'));
	}


	public function createService0313(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0314(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0315(): PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension;
	}


	public function createService0316(): PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension($this->getService('0294'));
	}


	public function createService0317(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0318(): PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension;
	}


	public function createService0319(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0320(): PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0321(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension(
			null,
			$this->getService('0434'),
			$this->getService('0433')
		);
	}


	public function createService0322(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0323(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0324(): PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicThrowTypeExtension($this->getService('0433'));
	}


	public function createService0325(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension($this->getService('0248'));
	}


	public function createService0326(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0327(): PHPStan\Type\Php\IdateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeExtension($this->getService('0272'));
	}


	public function createService0328(): PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureGetCurrentDynamicReturnTypeExtension;
	}


	public function createService0329(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0330(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('0433'));
	}


	public function createService0331(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0433')
		);
	}


	public function createService0332(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0333(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0334(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension;
	}


	public function createService0335(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0336(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0337(): PHPStan\Type\Php\IniGetReturnTypeExtension
	{
		return new PHPStan\Type\Php\IniGetReturnTypeExtension;
	}


	public function createService0338(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0339(): PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension;
	}


	public function createService0340(): PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension;
	}


	public function createService0341(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0342(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0343(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0344(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension($this->getService('0433'));
	}


	public function createService0345(): PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension;
	}


	public function createService0346(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0347(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0348(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0362'));
	}


	public function createService0349(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0350(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0351(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('0433'));
	}


	public function createService0352(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0353(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0354(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0355(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0356(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0357(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0358(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0359(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0360(): PHPStan\Type\Php\FilterVarThrowTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0361(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('0294'));
	}


	public function createService0362(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0363(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0364(): PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension($this->getService('0433'));
	}


	public function createService0365(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0366(): PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension($this->getService('0433'));
	}


	public function createService0367(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0368(): PHPStan\Type\Php\GettypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettypeFunctionReturnTypeExtension;
	}


	public function createService0369(): PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension;
	}


	public function createService0370(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass']
		);
	}


	public function createService0371(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0372(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0373(): PHPStan\Type\Php\StrrevFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrrevFunctionReturnTypeExtension;
	}


	public function createService0374(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0375(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0313'));
	}


	public function createService0376(): PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension($this->getService('0433'));
	}


	public function createService0377(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0378(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0379(): PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension;
	}


	public function createService0380(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0381(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0382(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0383(): PHPStan\Type\Php\PregMatchParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\PregMatchParameterOutTypeExtension($this->getService('0252'));
	}


	public function createService0384(): PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension;
	}


	public function createService0385(): PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension;
	}


	public function createService0386(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0387(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0388(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0389(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0244'));
	}


	public function createService0390(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0391(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0169'));
	}


	public function createService0392(): PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension(
			$this->getService('0294'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0393(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0394(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('0433'));
	}


	public function createService0395(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('0295'));
	}


	public function createService0396(): PHPStan\Type\Php\ConstantHelper
	{
		return new PHPStan\Type\Php\ConstantHelper;
	}


	public function createService0397(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0398(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0399(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0400(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0401(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0402(): PHPStan\Type\Php\ConstantFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ConstantFunctionReturnTypeExtension($this->getService('0396'));
	}


	public function createService0403(): PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension($this->getService('0331'));
	}


	public function createService0404(): PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension;
	}


	public function createService0405(): PHPStan\Type\Php\AssertThrowTypeExtension
	{
		return new PHPStan\Type\Php\AssertThrowTypeExtension;
	}


	public function createService0406(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0407(): PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension;
	}


	public function createService0408(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension($this->getService('0396'));
	}


	public function createService0409(): PHPStan\Type\Php\PDOConnectReturnTypeExtension
	{
		return new PHPStan\Type\Php\PDOConnectReturnTypeExtension($this->getService('0433'));
	}


	public function createService0410(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0411(): PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension;
	}


	public function createService0412(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0413(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension($this->getService('0433'));
	}


	public function createService0414(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0244')
		);
	}


	public function createService0415(): PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension;
	}


	public function createService0416(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('028'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0159'),
			$this->getService('0151'),
			$this->getService('0124'),
			$this->getService('05')
		);
	}


	public function createService0417(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService0418(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService0419(): PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('0421'));
	}


	public function createService0420(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/var/www/html',
			'/var/www/html/tmp/upgrade_status/phpstan',
			['/var/www/html/tmp/upgrade_status/deprecation_testing.neon'],
			$this->getParameter('analysedPaths'),
			['/var/www/html'],
			$this->getParameter('analysedPathsFromConfig'),
			'0',
			null,
			null,
			$this->getParameter('singleReflectionFile'),
			$this->getParameter('singleReflectionInsteadOfFile')
		);
	}


	public function createService0421(): PHPStan\DependencyInjection\MemoizingContainer
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('0418'));
	}


	public function createService0422(): PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider($this->getService('0421'));
	}


	public function createService0423(): PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('0421'));
	}


	public function createService0424(): PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('0421'));
	}


	public function createService0425(): PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider($this->getService('0421'));
	}


	public function createService0426(): PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('0421'));
	}


	public function createService0427(): PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider($this->getService('0421'));
	}


	public function createService0428(): PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider($this->getService('0421'));
	}


	public function createService0429(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('0421'));
	}


	public function createService0430(): PHPStan\Collectors\Registry
	{
		return $this->getService('0429')->create();
	}


	public function createService0431(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(null, ['/var/www/html']);
	}


	public function createService0432(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('0431')->create();
	}


	public function createService0433(): PHPStan\Php\PhpVersion
	{
		return $this->getService('0432')->create();
	}


	public function createService0434(): PHPStan\Php\ComposerPhpVersionFactory
	{
		return new PHPStan\Php\ComposerPhpVersionFactory(['/var/www/html']);
	}


	public function createService0435(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService0436(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 0, 2);
	}


	public function createService0437(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('05'), $analyseExcludes);
			}
		};
	}


	public function createService0438(): PHPStan\Reflection\ClassReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\ClassReflectionFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(
				string $displayName,
				ReflectionClass $reflection,
				?string $anonymousFilename,
				?PHPStan\Type\Generic\TemplateTypeMap $resolvedTemplateTypeMap,
				?PHPStan\PhpDoc\ResolvedPhpDocBlock $stubPhpDocBlock,
				?string $extraCacheKey = null,
				?PHPStan\Type\Generic\TemplateTypeVarianceMap $resolvedCallSiteVarianceMap = null,
				?bool $finalByKeywordOverride = null
			): PHPStan\Reflection\ClassReflection {
				return new PHPStan\Reflection\ClassReflection(
					$this->container->getService('0438'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('07'),
					$this->container->getService('0416'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('0162'),
					$this->container->getService('0433'),
					$this->container->getService('010'),
					$this->container->getService('023'),
					$this->container->getService('024'),
					$this->container->getService('0419'),
					$displayName,
					$reflection,
					$anonymousFilename,
					$resolvedTemplateTypeMap,
					$stubPhpDocBlock,
					$extraCacheKey,
					$resolvedCallSiteVarianceMap,
					$finalByKeywordOverride
				);
			}
		};
	}


	public function createService0439(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('018'),
					$fileName
				);
			}
		};
	}


	public function createService0440(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('022'));
			}
		};
	}


	public function createService0441(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionMethod $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $immediatelyInvokedCallableParameters,
				array $phpDocClosureThisTypeParameters,
				bool $acceptsNamedArguments,
				array $attributes
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('07'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('024'),
					$this->container->getService('defaultAnalysisParser'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$immediatelyInvokedCallableParameters,
					$phpDocClosureThisTypeParameters,
					$attributes
				);
			}
		};
	}


	public function createService0442(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				bool $acceptsNamedArguments,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $phpDocParameterImmediatelyInvokedCallable,
				array $phpDocParameterClosureThisTypes,
				array $attributes
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('07'),
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('024'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$filename,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$phpDocParameterImmediatelyInvokedCallable,
					$phpDocParameterClosureThisTypes,
					$attributes
				);
			}
		};
	}


	public function createService0443(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('0421'),
					$this->container->getService('01'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('0157'),
					$this->container->getService('05'),
					'/var/www/html/tmp/upgrade_status/phpstan/resultCache.php',
					$this->container->getParameter('analysedPaths'),
					$this->container->getParameter('analysedPathsFromConfig'),
					['/var/www/html'],
					'0',
					null,
					[
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
						'/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
					],
					['/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub'],
					[],
					$fileReplacements,
					false,
					[
						['parameters', 'editorUrl'],
						['parameters', 'editorUrlTitle'],
						['parameters', 'errorFormat'],
						['parameters', 'ignoreErrors'],
						['parameters', 'reportUnmatchedIgnoredErrors'],
						['parameters', 'tipsOfTheDay'],
						['parameters', 'parallel'],
						['parameters', 'internalErrorsCountLimit'],
						['parameters', 'cache'],
						['parameters', 'memoryLimitFile'],
						['parameters', 'pro'],
						'parametersSchema',
					],
					7
				);
			}
		};
	}


	public function createService0444(): PHPStan\Analyser\Generator\InternalGeneratorScopeFactory
	{
		return new class ($this) implements PHPStan\Analyser\Generator\InternalGeneratorScopeFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Analyser\ScopeContext $context,
				bool $declareStrictTypes = false,
				$function = null,
				?string $namespace = null,
				array $expressionTypes = [],
				array $nativeExpressionTypes = [],
				array $conditionalExpressions = [],
				array $inClosureBindScopeClasses = [],
				?PHPStan\Type\ClosureType $anonymousFunctionReflection = null,
				bool $inFirstLevelStatement = true,
				array $currentlyAssignedExpressions = [],
				array $currentlyAllowedUndefinedExpressions = [],
				array $inFunctionCallsStack = [],
				bool $afterExtractCall = false,
				?PHPStan\Analyser\Scope $parentScope = null,
				bool $nativeTypesPromoted = false
			): PHPStan\Analyser\Generator\GeneratorScope {
				return new PHPStan\Analyser\Generator\GeneratorScope(
					$this->container->getService('0444'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('07'),
					$this->container->getService('typeSpecifier'),
					$this->container->getService('0126'),
					$this->container->getService('0169'),
					$this->container->getService('currentPhpVersionSimpleParser'),
					$this->container->getService('0115'),
					$context,
					$this->container->getService('0433'),
					$this->container->getService('024'),
					null,
					$declareStrictTypes,
					$function,
					$namespace,
					$expressionTypes,
					$nativeExpressionTypes,
					$conditionalExpressions,
					$inClosureBindScopeClasses,
					$anonymousFunctionReflection,
					$inFirstLevelStatement,
					$currentlyAssignedExpressions,
					$currentlyAllowedUndefinedExpressions,
					$inFunctionCallsStack,
					$afterExtractCall,
					$parentScope,
					$nativeTypesPromoted
				);
			}
		};
	}


	public function createService0445(): PHPStan\Analyser\InternalScopeFactoryFactory
	{
		return new class ($this) implements PHPStan\Analyser\InternalScopeFactoryFactory {
			private $container;


			public function __construct(Container_4f7eaf5a28 $container)
			{
				$this->container = $container;
			}


			public function create(?callable $nodeCallback): PHPStan\Analyser\InternalScopeFactory
			{
				return new PHPStan\Analyser\LazyInternalScopeFactory($this->container->getService('0421'), $nodeCallback);
			}
		};
	}


	public function createService0446(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService0447(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(options: ['preserveOriginalNames' => true]);
	}


	public function createService0448(): PHPStan\PhpDocParser\ParserConfig
	{
		return new PHPStan\PhpDocParser\ParserConfig(['lines' => true]);
	}


	public function createService0449(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer($this->getService('0448'));
	}


	public function createService0450(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('0448'), $this->getService('0451'));
	}


	public function createService0451(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser($this->getService('0448'));
	}


	public function createService0452(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser(
			$this->getService('0448'),
			$this->getService('0450'),
			$this->getService('0451')
		);
	}


	public function createService0453(): PHPStan\PhpDocParser\Printer\Printer
	{
		return new PHPStan\PhpDocParser\Printer\Printer;
	}


	public function createService0454(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('015')->create();
	}


	public function createService0455(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return $this->getService('014')->create();
	}


	public function createService0456(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('02'));
	}


	public function createService0457(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService0458(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('0113'),
			$this->getService('0111'),
			$this->getService('0441'),
			$this->getService('0162'),
			$this->getService('023'),
			$this->getService('0459'),
			$this->getService('0460'),
			$this->getService('010'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('028'),
			$this->getService('0416'),
			$this->getService('024'),
			false
		);
	}


	public function createService0459(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService0460(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService0461(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass'],
			$this->getService('0460')
		);
	}


	public function createService0462(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService0463(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService0464(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService0465(): PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension;
	}


	public function createService0466(): PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension;
	}


	public function createService0467(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule($this->getService('0193'), false, false);
	}


	public function createService0468(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0469(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0470(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0471(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0472(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0473(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0433'), 'DateTime');
	}


	public function createService0474(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0433'), 'DateTimeImmutable');
	}


	public function createService0475(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0433'),
			'PHPStan\Reflection\ClassReflection',
			'getNativeReflection'
		);
	}


	public function createService0476(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0433'),
			'PHPStan\Reflection\Php\BuiltinMethodReflection',
			'getDeclaringClass'
		);
	}


	public function createService0477(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0433'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumBackedCase'
		);
	}


	public function createService0478(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0433'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumUnitCase'
		);
	}


	public function createService0479(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0230'));
	}


	public function createService0480(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0230'));
	}


	public function createService0481(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule($this->getService('0230'));
	}


	public function createService0482(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('025'));
	}


	public function createService0483(): PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule
	{
		return new PHPStan\Rules\Exceptions\MethodThrowTypeCovarianceRule($this->getService('0193'), true);
	}


	public function createService0484(): mglaman\PHPStanDrupal\Drupal\ServiceMap
	{
		return new mglaman\PHPStanDrupal\Drupal\ServiceMap;
	}


	public function createService0485(): mglaman\PHPStanDrupal\Drupal\ExtensionMap
	{
		return new mglaman\PHPStanDrupal\Drupal\ExtensionMap;
	}


	public function createService0486(): mglaman\PHPStanDrupal\Drupal\EntityDataRepository
	{
		return new mglaman\PHPStanDrupal\Drupal\EntityDataRepository([
			'aggregator_feed' => ['class' => 'Drupal\aggregator\Entity\Feed', 'storage' => 'Drupal\aggregator\FeedStorage'],
			'aggregator_item' => ['class' => 'Drupal\aggregator\Entity\Item', 'storage' => 'Drupal\aggregator\ItemStorage'],
			'block' => ['class' => 'Drupal\block\Entity\Block', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'block_content' => [
				'class' => 'Drupal\block_content\Entity\BlockContent',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'block_content_type' => [
				'class' => 'Drupal\block_content\Entity\BlockContentType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'comment_type' => [
				'class' => 'Drupal\comment\Entity\CommentType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'comment' => ['class' => 'Drupal\comment\Entity\Comment', 'storage' => 'Drupal\comment\CommentStorage'],
			'contact_form' => [
				'class' => 'Drupal\contact\Entity\ContactForm',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'contact_message' => [
				'class' => 'Drupal\contact\Entity\Message',
				'storage' => 'Drupal\Core\Entity\ContentEntityNullStorage',
			],
			'content_moderation_state' => [
				'class' => 'Drupal\content_moderation\Entity\ContentModerationState',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'editor' => [
				'class' => 'Drupal\editor\Entity\Editor',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'field_config' => ['class' => 'Drupal\field\Entity\FieldConfig', 'storage' => 'Drupal\field\FieldConfigStorage'],
			'field_storage_config' => [
				'class' => 'Drupal\field\Entity\FieldStorageConfig',
				'storage' => 'Drupal\field\FieldStorageConfigStorage',
			],
			'file' => ['class' => 'Drupal\file\Entity\File', 'storage' => 'Drupal\file\FileStorage'],
			'filter_format' => [
				'class' => 'Drupal\filter\Entity\FilterFormat',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'image_style' => ['class' => 'Drupal\image\Entity\ImageStyle', 'storage' => 'Drupal\image\ImageStyleStorage'],
			'imce_profile' => [
				'class' => 'Drupal\imce\Entity\ImceProfile',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'configurable_language' => [
				'class' => 'Drupal\language\Entity\ConfigurableLanguage',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'language_content_settings' => [
				'class' => 'Drupal\language\Entity\ContentLanguageSettings',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'media_type' => [
				'class' => 'Drupal\media\Entity\MediaType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'media' => ['class' => 'Drupal\media\Entity\Media', 'storage' => 'Drupal\media\MediaStorage'],
			'menu_link_content' => [
				'class' => 'Drupal\menu_link_content\Entity\MenuLinkContent',
				'storage' => '\Drupal\menu_link_content\MenuLinkContentStorage',
			],
			'metatag_defaults' => [
				'class' => 'Drupal\metatag\Entity\MetatagDefaults',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'node_type' => [
				'class' => 'Drupal\node\Entity\NodeType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'node' => ['class' => 'Drupal\node\Entity\Node', 'storage' => 'Drupal\node\NodeStorage'],
			'path_alias' => [
				'class' => 'Drupal\path_alias\Entity\PathAlias',
				'storage' => 'Drupal\path_alias\PathAliasStorage',
			],
			'rdf_mapping' => [
				'class' => 'Drupal\rdf\Entity\RdfMapping',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'responsive_image_style' => [
				'class' => 'Drupal\responsive_image\Entity\ResponsiveImageStyle',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'search_page' => [
				'class' => 'Drupal\search\Entity\SearchPage',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'search_api_server' => [
				'class' => 'Drupal\search_api\Entity\Server',
				'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
			],
			'search_api_index' => [
				'class' => 'Drupal\search_api\Entity\Index',
				'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
			],
			'search_api_task' => [
				'class' => 'Drupal\search_api\Entity\Task',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'shortcut_set' => [
				'class' => 'Drupal\shortcut\Entity\ShortcutSet',
				'storage' => 'Drupal\shortcut\ShortcutSetStorage',
			],
			'shortcut' => [
				'class' => 'Drupal\shortcut\Entity\Shortcut',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'action' => [
				'class' => 'Drupal\system\Entity\Action',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'menu' => ['class' => 'Drupal\system\Entity\Menu', 'storage' => 'Drupal\system\MenuStorage'],
			'taxonomy_term' => ['class' => 'Drupal\taxonomy\Entity\Term', 'storage' => 'Drupal\taxonomy\TermStorage'],
			'taxonomy_vocabulary' => [
				'class' => 'Drupal\taxonomy\Entity\Vocabulary',
				'storage' => 'Drupal\taxonomy\VocabularyStorage',
			],
			'tour' => ['class' => 'Drupal\tour\Entity\Tour', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'user' => ['class' => 'Drupal\user\Entity\User', 'storage' => 'Drupal\user\UserStorage'],
			'user_role' => ['class' => 'Drupal\user\Entity\Role', 'storage' => 'Drupal\user\RoleStorage'],
			'webform' => ['class' => 'Drupal\webform\Entity\Webform', 'storage' => '\Drupal\webform\WebformEntityStorage'],
			'webform_submission' => [
				'class' => 'Drupal\webform\Entity\WebformSubmission',
				'storage' => 'Drupal\webform\WebformSubmissionStorage',
			],
			'webform_options' => [
				'class' => 'Drupal\webform\Entity\WebformOptions',
				'storage' => '\Drupal\webform\WebformOptionsStorage',
			],
			'workflow' => [
				'class' => 'Drupal\workflows\Entity\Workflow',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'pathauto_pattern' => [
				'class' => 'Drupal\pathauto\Entity\PathautoPattern',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'view' => ['class' => 'Drupal\views\Entity\View', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'date_format' => [
				'class' => 'Drupal\Core\Datetime\Entity\DateFormat',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_form_mode' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityFormMode',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_view_display' => [
				'class' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplay',
				'storage' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplayStorage',
			],
			'entity_form_display' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityFormDisplay',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_view_mode' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityViewMode',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'base_field_override' => [
				'class' => 'Drupal\Core\Field\Entity\BaseFieldOverride',
				'storage' => 'Drupal\Core\Field\BaseFieldOverrideStorage',
			],
		]);
	}


	public function createService0487(): mglaman\PHPStanDrupal\Type\EntityIdNarrowedByNew
	{
		return new mglaman\PHPStanDrupal\Type\EntityIdNarrowedByNew;
	}


	public function createService0488(): mglaman\PHPStanDrupal\Type\EntityTypeKeyByExistence
	{
		return new mglaman\PHPStanDrupal\Type\EntityTypeKeyByExistence;
	}


	public function createService0489(): mglaman\PHPStanDrupal\Type\EntityTypeLinkTemplateByExistence
	{
		return new mglaman\PHPStanDrupal\Type\EntityTypeLinkTemplateByExistence;
	}


	public function createService0490(): mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension($this->getService('0486'));
	}


	public function createService0491(): mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension($this->getService('0486'));
	}


	public function createService0492(): mglaman\PHPStanDrupal\Type\EntityRepositoryReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityRepositoryReturnTypeExtension($this->getService('0486'));
	}


	public function createService0493(): mglaman\PHPStanDrupal\Type\EntityStorage\GetQueryReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityStorage\GetQueryReturnTypeExtension;
	}


	public function createService0494(): mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension($this->getService('0484'));
	}


	public function createService0495(): mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension($this->getService('0484'));
	}


	public function createService0496(): mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension;
	}


	public function createService0497(): mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryAccessCheckDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryAccessCheckDynamicReturnTypeExtension;
	}


	public function createService0498(): mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension;
	}


	public function createService0499(): mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension($this->getService('0484'));
	}


	public function createService0500(): mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension($this->getService('0484'));
	}


	public function createService0501(): mglaman\PHPStanDrupal\Type\DrupalStaticEntityQueryDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalStaticEntityQueryDynamicReturnTypeExtension($this->getService('0486'));
	}


	public function createService0502(): mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension
	{
		return new mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension($this->getService('reflectionProvider'));
	}


	public function createService0503(): mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension
	{
		return new mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension;
	}


	public function createService0504(): mglaman\PHPStanDrupal\Drupal\DrupalStubFilesExtension
	{
		return new mglaman\PHPStanDrupal\Drupal\DrupalStubFilesExtension;
	}


	public function createService0505(): mglaman\PHPStanDrupal\Type\EntityQuery\AccessCheckTypeSpecifyingExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityQuery\AccessCheckTypeSpecifyingExtension;
	}


	public function createService0506(): mglaman\PHPStanDrupal\DeprecatedScope\GroupLegacyScope
	{
		return new mglaman\PHPStanDrupal\DeprecatedScope\GroupLegacyScope;
	}


	public function createService0507(): mglaman\PHPStanDrupal\DeprecatedScope\IgnoreDeprecationsScope
	{
		return new mglaman\PHPStanDrupal\DeprecatedScope\IgnoreDeprecationsScope;
	}


	public function createService0508(): mglaman\PHPStanDrupal\DeprecatedScope\DeprecationHelperScope
	{
		return new mglaman\PHPStanDrupal\DeprecatedScope\DeprecationHelperScope;
	}


	public function createService0509(): mglaman\PHPStanDrupal\Type\InspectorTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\InspectorTypeExtension;
	}


	public function createService0510(): PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider
	{
		return new PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider($this->getService('0421'));
	}


	public function createService0511(): PHPStan\Rules\Deprecations\DeprecatedScopeHelper
	{
		return $this->getService('0510')->get();
	}


	public function createService0512(): PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver
	{
		return new PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver;
	}


	public function createService0513(): PHPStan\Rules\Deprecations\CallWithDeprecatedIniOptionRule
	{
		return new PHPStan\Rules\Deprecations\CallWithDeprecatedIniOptionRule(
			$this->getService('reflectionProvider'),
			$this->getService('0511'),
			$this->getService('0433')
		);
	}


	public function createService0514(): PHPStan\Rules\Deprecations\RestrictedDeprecatedClassConstantUsageExtension
	{
		return new PHPStan\Rules\Deprecations\RestrictedDeprecatedClassConstantUsageExtension($this->getService('0511'));
	}


	public function createService0515(): PHPStan\Rules\Deprecations\RestrictedDeprecatedFunctionUsageExtension
	{
		return new PHPStan\Rules\Deprecations\RestrictedDeprecatedFunctionUsageExtension($this->getService('0511'));
	}


	public function createService0516(): PHPStan\Rules\Deprecations\RestrictedDeprecatedMethodUsageExtension
	{
		return new PHPStan\Rules\Deprecations\RestrictedDeprecatedMethodUsageExtension($this->getService('0511'));
	}


	public function createService0517(): PHPStan\Rules\Deprecations\RestrictedDeprecatedPropertyUsageExtension
	{
		return new PHPStan\Rules\Deprecations\RestrictedDeprecatedPropertyUsageExtension($this->getService('0511'));
	}


	public function createService0518(): PHPStan\Rules\Deprecations\RestrictedDeprecatedClassNameUsageExtension
	{
		return new PHPStan\Rules\Deprecations\RestrictedDeprecatedClassNameUsageExtension(
			$this->getService('0511'),
			$this->getService('reflectionProvider'),
			false
		);
	}


	public function createService0519(): mglaman\PHPStanDrupal\Rules\Drupal\HookFormAlterRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\HookFormAlterRule;
	}


	public function createService0520(): mglaman\PHPStanDrupal\Rules\Drupal\Tests\TestClassSuffixNameRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\Tests\TestClassSuffixNameRule;
	}


	public function createService0521(): mglaman\PHPStanDrupal\Rules\Drupal\DependencySerializationTraitPropertyRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\DependencySerializationTraitPropertyRule;
	}


	public function createService0522(): mglaman\PHPStanDrupal\Rules\Drupal\AccessResultConditionRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\AccessResultConditionRule(true);
	}


	public function createService0523(): mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule
	{
		return new mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule($this->getService('reflectionProvider'));
	}


	public function createService0524(): mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule
	{
		return new mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule($this->getService('reflectionProvider'));
	}


	public function createService0525(): mglaman\PHPStanDrupal\Rules\Drupal\CacheableDependencyRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\CacheableDependencyRule;
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('07'),
			$this->getService('0438'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0416'),
			$this->getService('023'),
			$this->getService('0433'),
			$this->getService('012'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0442'),
			$this->getService('relativePathHelper'),
			$this->getService('0124'),
			$this->getService('05'),
			$this->getService('0454'),
			$this->getService('024'),
			['stdClass']
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('016')->create();
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/var/www/html/tmp/upgrade_status/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_4f7eaf5a28
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('0132')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\ParserAbstract
	{
		return $this->getService('currentPhpVersionPhpParserFactory')->create();
	}


	public function createServiceCurrentPhpVersionPhpParserFactory(): PHPStan\Parser\PhpParserFactory
	{
		return new PHPStan\Parser\PhpParserFactory($this->getService('currentPhpVersionLexer'), $this->getService('0433'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('0447'),
			$this->getService('0421'),
			$this->getService('0116')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('0447'),
			$this->getService('0141'),
			$this->getService('0128')
		);
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('0433'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('0123'),
			true,
			null,
			null
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0229');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('04')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('04')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderAnalyse'),
			$this->getService('05'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderScan'),
			$this->getService('05'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceFreshStubParser(): PHPStan\Parser\StubParser
	{
		return new PHPStan\Parser\StubParser($this->getService('php8PhpParser'), $this->getService('0447'));
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/var/www/html');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('05'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser'),
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('0132')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('php8PhpParser'),
			$this->getService('0447'),
			$this->getService('0141'),
			$this->getService('0128')
		);
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php8
	{
		return new PhpParser\Parser\Php8($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServicePhpstanDiagnoseExtension(): PHPStan\Diagnose\PHPStanDiagnoseExtension
	{
		return new PHPStan\Diagnose\PHPStanDiagnoseExtension(
			$this->getService('0433'),
			null,
			$this->getService('05'),
			['/var/www/html'],
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'/var/www/html/tmp/upgrade_status/deprecation_testing.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/extension.neon',
				'/var/www/html/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/rules.neon',
			],
			$this->getService('0434')
		);
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('0421'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\FuzzyRelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/var/www/html',
			$this->getParameter('analysedPaths')
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule
	{
		return new PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule(
			$this->getService('reflectionProvider'),
			$this->getService('0511')
		);
	}


	public function createServiceRules__1(): mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule;
	}


	public function createServiceRules__10(): mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude($this->getService('0485'));
	}


	public function createServiceRules__11(): mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes($this->getService('0485'));
	}


	public function createServiceRules__12(): mglaman\PHPStanDrupal\Rules\Drupal\EntityQuery\EntityQueryHasAccessCheckRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\EntityQuery\EntityQueryHasAccessCheckRule;
	}


	public function createServiceRules__13(): mglaman\PHPStanDrupal\Rules\Drupal\TestClassesProtectedPropertyModulesRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\TestClassesProtectedPropertyModulesRule;
	}


	public function createServiceRules__2(): mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule;
	}


	public function createServiceRules__3(): mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule;
	}


	public function createServiceRules__4(): mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule(
			$this->getService('reflectionProvider'),
			$this->getService('0484')
		);
	}


	public function createServiceRules__5(): mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule($this->getService('0484'));
	}


	public function createServiceRules__6(): mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule($this->getService('0484'));
	}


	public function createServiceRules__7(): mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule;
	}


	public function createServiceRules__8(): mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__9(): mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule($this->getService('reflectionProvider'));
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\SimpleRelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/var/www/html');
	}


	public function createServiceStubFileTypeMapper(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('028'),
			$this->getService('stubParser'),
			$this->getService('0159'),
			$this->getService('0151'),
			$this->getService('0124'),
			$this->getService('05')
		);
	}


	public function createServiceStubParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('freshStubParser'), 256);
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('stubParser'),
			$this->getService('stubFileTypeMapper'),
			$this->getService('0157')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\LegacyTypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('0421'));
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'bootstrapFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
			],
			'excludePaths' => [
				'analyseAndScan' => [
					'*.api.php',
					'*/tests/fixtures/*.php',
					'*/tests/Drupal/Tests/Listeners/Legacy/*',
					'*/tests/fixtures/*.php',
					'*/settings*.php',
					'*/bower_components/*',
					'*/node_modules/*',
				],
				'analyse' => [],
			],
			'level' => null,
			'paths' => [],
			'exceptions' => [
				'implicitThrows' => true,
				'reportUncheckedExceptionDeadCatch' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => [
					'missingCheckedExceptionInThrows' => false,
					'tooWideThrowType' => true,
					'tooWideImplicitThrowType' => false,
					'throwTypeCovariance' => false,
				],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'checkNonStringableDynamicAccess' => false,
				'checkParameterCastableToNumberFunctions' => false,
				'skipCheckGenericClasses' => ['DOMNamedNodeMap'],
				'stricterFunctionMap' => false,
				'reportPreciseLineForUnusedFunctionParameter' => false,
				'checkPrintfParameterTypes' => false,
				'internalTag' => false,
				'newStaticInAbstractClassStaticMethod' => false,
				'checkExtensionsForComparisonOperators' => false,
				'reportTooWideBool' => false,
				'rawMessageInBaseline' => false,
				'reportNestedTooWideType' => false,
				'assignToByRefForeachExpr' => false,
				'curlSetOptArrayTypes' => false,
			],
			'fileExtensions' => ['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine'],
			'checkAdvancedIsset' => false,
			'reportAlwaysTrueInLastCondition' => false,
			'checkClassCaseSensitivity' => false,
			'checkExplicitMixed' => false,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkBenevolentUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => false,
			'checkExtraArguments' => false,
			'checkMissingTypehints' => false,
			'checkTooWideParameterOutInProtectedAndPublicMethods' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkTooWideThrowTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'strictRulesInstalled' => false,
			'deprecationRulesInstalled' => true,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'checkStrictPrintfPlaceholderTypes' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'reportWrongPhpDocTypeInVarTag' => false,
			'reportAnyTypeWideningInVarTag' => false,
			'reportPossiblyNonexistentGeneralArrayOffset' => false,
			'reportPossiblyNonexistentConstantArrayOffset' => false,
			'checkMissingOverrideMethodAttribute' => false,
			'checkMissingOverridePropertyAttribute' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => ['/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub'],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 0,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteScopeWithBlock' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'usePathConstantsAsConstantString' => false,
			'rememberPossiblyImpureFunctionValues' => true,
			'tips' => ['discoveringSymbols' => true, 'treatPhpDocTypesAsCertain' => true],
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => false,
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/file.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_client.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/stream_socket_server.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'resultCachePath' => '/var/www/html/tmp/upgrade_status/phpstan/resultCache.php',
			'resultCacheSkipIfOlderThanDays' => 7,
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'E_ALL',
				'Drupal::VERSION',
			],
			'customRulesetUsed' => true,
			'editorUrl' => null,
			'editorUrlTitle' => null,
			'errorFormat' => null,
			'sourceLocatorPlaygroundMode' => false,
			'__validate' => true,
			'narrowMethodScopeFromConstructor' => true,
			'parametersNotInvalidatingCache' => [
				['parameters', 'editorUrl'],
				['parameters', 'editorUrlTitle'],
				['parameters', 'errorFormat'],
				['parameters', 'ignoreErrors'],
				['parameters', 'reportUnmatchedIgnoredErrors'],
				['parameters', 'tipsOfTheDay'],
				['parameters', 'parallel'],
				['parameters', 'internalErrorsCountLimit'],
				['parameters', 'cache'],
				['parameters', 'memoryLimitFile'],
				['parameters', 'pro'],
				'parametersSchema',
			],
			'drupal' => [
				'drupal_root' => null,
				'bleedingEdge' => [
					'checkDeprecatedHooksInApiFiles' => false,
					'checkCoreDeprecatedHooksInApiFiles' => false,
					'checkContribDeprecatedHooksInApiFiles' => false,
				],
				'extensions' => [
					'entityFieldsViaMagicReflection' => true,
					'entityFieldMethodsViaMagicReflection' => true,
					'entityQuery' => true,
					'entityRepository' => true,
					'stubFiles' => true,
				],
				'rules' => [
					'testClassSuffixNameRule' => false,
					'dependencySerializationTraitPropertyRule' => false,
					'accessResultConditionRule' => false,
					'classExtendsInternalClassRule' => false,
					'pluginManagerInspectionRule' => false,
					'cacheableDependencyRule' => false,
					'hookRules' => false,
				],
				'entityMapping' => [
					'aggregator_feed' => [
						'class' => 'Drupal\aggregator\Entity\Feed',
						'storage' => 'Drupal\aggregator\FeedStorage',
					],
					'aggregator_item' => [
						'class' => 'Drupal\aggregator\Entity\Item',
						'storage' => 'Drupal\aggregator\ItemStorage',
					],
					'block' => [
						'class' => 'Drupal\block\Entity\Block',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'block_content' => [
						'class' => 'Drupal\block_content\Entity\BlockContent',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'block_content_type' => [
						'class' => 'Drupal\block_content\Entity\BlockContentType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'comment_type' => [
						'class' => 'Drupal\comment\Entity\CommentType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'comment' => ['class' => 'Drupal\comment\Entity\Comment', 'storage' => 'Drupal\comment\CommentStorage'],
					'contact_form' => [
						'class' => 'Drupal\contact\Entity\ContactForm',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'contact_message' => [
						'class' => 'Drupal\contact\Entity\Message',
						'storage' => 'Drupal\Core\Entity\ContentEntityNullStorage',
					],
					'content_moderation_state' => [
						'class' => 'Drupal\content_moderation\Entity\ContentModerationState',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'editor' => [
						'class' => 'Drupal\editor\Entity\Editor',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'field_config' => [
						'class' => 'Drupal\field\Entity\FieldConfig',
						'storage' => 'Drupal\field\FieldConfigStorage',
					],
					'field_storage_config' => [
						'class' => 'Drupal\field\Entity\FieldStorageConfig',
						'storage' => 'Drupal\field\FieldStorageConfigStorage',
					],
					'file' => ['class' => 'Drupal\file\Entity\File', 'storage' => 'Drupal\file\FileStorage'],
					'filter_format' => [
						'class' => 'Drupal\filter\Entity\FilterFormat',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'image_style' => [
						'class' => 'Drupal\image\Entity\ImageStyle',
						'storage' => 'Drupal\image\ImageStyleStorage',
					],
					'imce_profile' => [
						'class' => 'Drupal\imce\Entity\ImceProfile',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'configurable_language' => [
						'class' => 'Drupal\language\Entity\ConfigurableLanguage',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'language_content_settings' => [
						'class' => 'Drupal\language\Entity\ContentLanguageSettings',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'media_type' => [
						'class' => 'Drupal\media\Entity\MediaType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'media' => ['class' => 'Drupal\media\Entity\Media', 'storage' => 'Drupal\media\MediaStorage'],
					'menu_link_content' => [
						'class' => 'Drupal\menu_link_content\Entity\MenuLinkContent',
						'storage' => '\Drupal\menu_link_content\MenuLinkContentStorage',
					],
					'metatag_defaults' => [
						'class' => 'Drupal\metatag\Entity\MetatagDefaults',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'node_type' => [
						'class' => 'Drupal\node\Entity\NodeType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'node' => ['class' => 'Drupal\node\Entity\Node', 'storage' => 'Drupal\node\NodeStorage'],
					'path_alias' => [
						'class' => 'Drupal\path_alias\Entity\PathAlias',
						'storage' => 'Drupal\path_alias\PathAliasStorage',
					],
					'rdf_mapping' => [
						'class' => 'Drupal\rdf\Entity\RdfMapping',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'responsive_image_style' => [
						'class' => 'Drupal\responsive_image\Entity\ResponsiveImageStyle',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'search_page' => [
						'class' => 'Drupal\search\Entity\SearchPage',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'search_api_server' => [
						'class' => 'Drupal\search_api\Entity\Server',
						'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
					],
					'search_api_index' => [
						'class' => 'Drupal\search_api\Entity\Index',
						'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
					],
					'search_api_task' => [
						'class' => 'Drupal\search_api\Entity\Task',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'shortcut_set' => [
						'class' => 'Drupal\shortcut\Entity\ShortcutSet',
						'storage' => 'Drupal\shortcut\ShortcutSetStorage',
					],
					'shortcut' => [
						'class' => 'Drupal\shortcut\Entity\Shortcut',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'action' => [
						'class' => 'Drupal\system\Entity\Action',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'menu' => ['class' => 'Drupal\system\Entity\Menu', 'storage' => 'Drupal\system\MenuStorage'],
					'taxonomy_term' => ['class' => 'Drupal\taxonomy\Entity\Term', 'storage' => 'Drupal\taxonomy\TermStorage'],
					'taxonomy_vocabulary' => [
						'class' => 'Drupal\taxonomy\Entity\Vocabulary',
						'storage' => 'Drupal\taxonomy\VocabularyStorage',
					],
					'tour' => [
						'class' => 'Drupal\tour\Entity\Tour',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'user' => ['class' => 'Drupal\user\Entity\User', 'storage' => 'Drupal\user\UserStorage'],
					'user_role' => ['class' => 'Drupal\user\Entity\Role', 'storage' => 'Drupal\user\RoleStorage'],
					'webform' => [
						'class' => 'Drupal\webform\Entity\Webform',
						'storage' => '\Drupal\webform\WebformEntityStorage',
					],
					'webform_submission' => [
						'class' => 'Drupal\webform\Entity\WebformSubmission',
						'storage' => 'Drupal\webform\WebformSubmissionStorage',
					],
					'webform_options' => [
						'class' => 'Drupal\webform\Entity\WebformOptions',
						'storage' => '\Drupal\webform\WebformOptionsStorage',
					],
					'workflow' => [
						'class' => 'Drupal\workflows\Entity\Workflow',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'pathauto_pattern' => [
						'class' => 'Drupal\pathauto\Entity\PathautoPattern',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'view' => [
						'class' => 'Drupal\views\Entity\View',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'date_format' => [
						'class' => 'Drupal\Core\Datetime\Entity\DateFormat',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_form_mode' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityFormMode',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_view_display' => [
						'class' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplay',
						'storage' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplayStorage',
					],
					'entity_form_display' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityFormDisplay',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_view_mode' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityViewMode',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'base_field_override' => [
						'class' => 'Drupal\Core\Field\Entity\BaseFieldOverride',
						'storage' => 'Drupal\Core\Field\BaseFieldOverrideStorage',
					],
				],
			],
			'tmpDir' => '/var/www/html/tmp/upgrade_status/phpstan',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/var/www/html/tmp/upgrade_status/phpstan',
			'rootDir' => '/var/www/html/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/var/www/html',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => ['/var/www/html/tmp/upgrade_status/deprecation_testing.neon'],
			'allConfigFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'/var/www/html/tmp/upgrade_status/deprecation_testing.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/extension.neon',
				'/var/www/html/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/rules.neon',
			],
			'composerAutoloaderProjectPaths' => ['/var/www/html'],
			'generateBaselineFile' => null,
			'usedLevel' => '0',
			'cliAutoloadFile' => null,
			'env' => [
				'IS_DDEV_PROJECT' => 'true',
				'PHP_DEFAULT_VERSION' => '8.3',
				'VIRTUAL_HOST' => 'livekaraokeband11.ddev.site',
				'DDEV_SCHEME' => 'https',
				'TERMINUS_HIDE_UPDATE_MESSAGE' => '1',
				'GATEWAY_INTERFACE' => 'CGI/1.1',
				'CONTENT_TYPE' => '',
				'PLATFORMSH_CLI_UPDATES_CHECK' => '0',
				'REQUEST_TIME' => '1765836240',
				'NODE_EXTRA_CA_CERTS' => '/mnt/ddev-global-cache/mkcert/rootCA.pem',
				'USER' => 'aam',
				'DOCUMENT_URI' => '/index.php',
				'REQUEST_TIME_FLOAT' => '1765836240.5737',
				'SUPERVISOR_GROUP_NAME' => 'php-fpm',
				'HOSTNAME' => 'livekaraokeband11-web',
				'DDEV_SITENAME' => 'livekaraokeband11',
				'SHLVL' => '1',
				'REMOTE_ADDR' => '172.18.0.5',
				'HOME' => '/home/aam',
				'QUERY_STRING' => '',
				'DDEV_PRIMARY_URL_WITHOUT_PORT' => 'https://livekaraokeband11.ddev.site',
				'DRUSH_OPTIONS_URI' => 'https://livekaraokeband11.ddev.site',
				'HTTP_EXPOSE' => '80:80,8025:8025',
				'CAROOT' => '/mnt/ddev-global-cache/mkcert',
				'PGDATABASE' => 'db',
				'COMPOSER_PROCESS_TIMEOUT' => '2000',
				'DDEV_PROJECT_TYPE' => 'drupal11',
				'HTTP_USER_AGENT' => 'Drupal/10.5.8 (+https://www.drupal.org/) GuzzleHttp/7',
				'REMOTE_PORT' => '35706',
				'DOCUMENT_ROOT' => '/var/www/html',
				'FCGI_ROLE' => 'RESPONDER',
				'DDEV_GID' => '20',
				'NGINX_SITE_TEMPLATE' => '/etc/nginx/nginx-site.conf',
				'DDEV_WEBSERVER_TYPE' => 'nginx-fpm',
				'DDEV_DATABASE_FAMILY' => 'mysql',
				'START_SCRIPT_TIMEOUT' => '57',
				'DDEV_PRIMARY_URL_PORT' => '443',
				'DDEV_PHP_VERSION' => '8.3',
				'DDEV_DATABASE' => 'mariadb:10.6',
				'DDEV_XDEBUG_ENABLED' => 'false',
				'CONTENT_LENGTH' => '0',
				'HTTPS_EXPOSE' => '443:80,8026:8025',
				'SCRIPT_FILENAME' => '/var/www/html/index.php',
				'NVM_DIR' => '/home/aam/.nvm',
				'DDEV_WEB_ENTRYPOINT' => '/mnt/ddev_config/web-entrypoint.d',
				'DDEV_COMPOSER_ROOT' => '/var/www/html',
				'HTTP_HOST' => 'livekaraokeband11.ddev.site',
				'COREPACK_ENABLE_DOWNLOAD_PROMPT' => '0',
				'DDEV_HOSTNAME' => 'livekaraokeband11.ddev.site',
				'DDEV_MUTAGEN_ENABLED' => 'true',
				'COMPOSER_ALLOW_SUPERUSER' => '1',
				'EXECIGNORE' => '/var/www/html/vendor/bin/composer',
				'HTTP_X_FORWARDED_FOR' => '172.18.0.20',
				'REQUEST_URI' => '/admin/reports/upgrade-status/analyze/lkb10',
				'SERVER_SOFTWARE' => 'nginx/1.28.0',
				'npm_config_cache' => '/mnt/ddev-global-cache/npm',
				'DDEV_FILES_DIR' => '/var/www/html/sites/default/files',
				'COLUMNS' => '120',
				'TERM' => 'xterm',
				'REQUEST_SCHEME' => 'http',
				'COREPACK_HOME' => '/mnt/ddev-global-cache/corepack',
				'DDEV_PRIMARY_URL' => 'https://livekaraokeband11.ddev.site',
				'DDEV_PROJECT' => 'livekaraokeband11',
				'XHPROF_OUTPUT_DIR' => '/tmp/xhprof',
				'HTTP_COOKIE' => 'SSESSc9fb3f9e18bc63fb2f363bee6796855e=VWa7M7VwwMWrWAVEefZydzq,4UuOdWxZp9RhULeA0lgXnT-E',
				'PATH' => '/home/aam/bin:/var/www/html/vendor/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/var/www/html/bin:/mnt/ddev-global-cache/global-commands/web',
				'DOCKER_IP' => '127.0.0.1',
				'DDEV_ROUTER_HTTP_PORT' => '80',
				'DEPLOY_NAME' => 'local',
				'HTTP_X_FORWARDED_SERVER' => '8aba36154230',
				'MH_SMTP_BIND_ADDR' => '127.0.0.1:1025',
				'DDEV_DOCROOT' => '',
				'DDEV_FILES_DIRS' => '/var/www/html/sites/default/files',
				'DDEV_UID' => '501',
				'COMPOSER_CACHE_DIR' => '/mnt/ddev-global-cache/composer',
				'LANG' => 'C.UTF-8',
				'SERVER_PROTOCOL' => 'HTTP/1.1',
				'DDEV_TLD' => 'ddev.site',
				'SUPERVISOR_ENABLED' => '1',
				'HTTP_ACCEPT_ENCODING' => 'gzip',
				'HTTP_X_FORWARDED_HOST' => 'livekaraokeband11.ddev.site',
				'SSH_AUTH_SOCK' => '/home/.ssh-agent/socket',
				'APACHE_SITE_TEMPLATE' => '/etc/apache2/apache-site.conf',
				'DEBIAN_FRONTEND' => 'noninteractive',
				'DDEV_ROUTER_HTTPS_PORT' => '443',
				'DOCROOT' => '',
				'HOST_DOCKER_INTERNAL_IP' => '',
				'HTTP_X_REAL_IP' => '172.18.0.20',
				'REDIRECT_STATUS' => '200',
				'PGPASSWORD' => 'db',
				'REQUEST_METHOD' => 'POST',
				'DDEV_GOOS' => 'darwin',
				'SUPERVISOR_SERVER_URL' => 'unix:///var/run/supervisor.sock',
				'DDEV_XHPROF_MODE' => 'prepend',
				'MYSQL_HISTFILE' => '/mnt/ddev-global-cache/mysqlhistory/livekaraokeband11-web/mysql_history',
				'BASH_ENV' => '/etc/bash.nointeractive.bashrc',
				'SUPERVISOR_PROCESS_NAME' => 'php-fpm',
				'HTTP_X_FORWARDED_PORT' => '443',
				'SERVER_ADDR' => '172.18.0.20',
				'PWD' => '/var/www/html',
				'PGHOST' => 'db',
				'HTTP_X_FORWARDED_PROTO' => 'https',
				'PHP_SELF' => '/index.php',
				'DDEV_APPROOT' => '/var/www/html',
				'PGUSER' => 'db',
				'HTTPS' => 'on',
				'DDEV_VERSION' => 'v1.24.8',
				'LINES' => '36',
				'SERVER_PORT' => '80',
				'TZ' => 'Europe/London',
				'SCRIPT_NAME' => '/index.php',
				'PHP_INI' => '/etc/php/8.3/fpm/php.ini',
				'TERMINUS_CACHE_DIR' => '/mnt/ddev-global-cache/terminus/cache',
				'DDEV_USER' => 'aam',
				'DDEV_GOARCH' => 'arm64',
				'HTTP_CONTENT_LENGTH' => '0',
				'SERVER_NAME' => 'livekaraokeband11.ddev.site',
				'SHELL_VERBOSITY' => '0',
			],
		];
	}


	protected function getDynamicParameter($key)
	{
		switch (true) {
			case $key === 'singleReflectionFile': return null;
			case $key === 'singleReflectionInsteadOfFile': return null;
			case $key === 'analysedPaths': return null;
			case $key === 'analysedPathsFromConfig': return null;
			case $key === 'sysGetTempDir': return sys_get_temp_dir();
			case $key === 'pro': return [
			'dnsServers' => ['1.1.1.2'],
			'tmpDir' => ($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
		];
			default: return parent::getDynamicParameter($key);
		};
	}


	public function getParameters(): array
	{
		array_map(function ($key) { $this->getParameter($key); }, [
			'singleReflectionFile',
			'singleReflectionInsteadOfFile',
			'analysedPaths',
			'analysedPathsFromConfig',
			'sysGetTempDir',
			'pro',
		]);
		return parent::getParameters();
	}
}
