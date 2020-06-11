<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'laravel/laravel';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'barryvdh/elfinder-flysystem-driver' => 'v0.2.1@1f323056495fdce019b6ef1621be697f2945c609',
  'barryvdh/laravel-elfinder' => 'v0.4.4@47405c06e828d16f834dcc6235f67c88971862f8',
  'caouecs/laravel-lang' => '4.0.8@b508ae398fc1a8453a6877229e57460dd07ecfa2',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'deployer/deployer' => 'v6.7.3@5095b5de166498aedb6ef7ffff98d7243fa036ea',
  'deployer/phar-update' => 'v2.2.0@9ad07422f2cd43a1382ee8e134bdcd3a374848e3',
  'deployer/recipes' => '6.2.2@84b3229c518c094a950e1fe785b7b8f9598770fe',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'dompdf/dompdf' => 'v0.8.4@8f49b3b01693f51037dd50da81090beba1b5c005',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.15@e834eea5306d85d67de5a05db5882911d5b29357',
  'esemve/hook' => 'dev-master@3d6c9581597bde7bba7abbbc386825ef354c45c5',
  'facade/flare-client-php' => '1.3.1@24444ea0e1556f0a4b5fc8e61802caf72ae9a408',
  'facade/ignition' => '1.16.0@37f094775814b68d0c6cc8b8ff3c3be243f20725',
  'facade/ignition-contracts' => '1.0.0@f445db0fb86f48e205787b2592840dd9c80ded28',
  'fideloper/proxy' => '4.2.2@790194d5d3da89a713478875d2e2d05855a90a81',
  'filp/whoops' => '2.7.1@fff6f1e4f36be0e0d0b84d66b413d9dcb0c49130',
  'firebase/php-jwt' => 'v5.0.0@9984a4d3a32ae7673d6971ea00bae9d0a1abba0e',
  'guzzlehttp/guzzle' => '6.5.2@43ece0e75098b7ecd8d13918293029e555a50f82',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'jakub-onderka/php-console-color' => 'v0.2@d5deaecff52a0d61ccb613bb3804088da0307191',
  'jakub-onderka/php-console-highlighter' => 'v0.4@9f7a229a69d52506914b4bc61bfdb199d90c5547',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'laminas/laminas-diactoros' => '2.2.2@95178c4751d737cdf9ab0a9f70a42754ac860e7b',
  'laminas/laminas-zendframework-bridge' => '1.0.1@0fb9675b84a1666ab45182b6c5b29956921e818d',
  'laravel/cashier' => 'v10.5.3@3c485612cfd22feaa550d99e78ade39f7c57b2f8',
  'laravel/framework' => 'v6.14.0@9e78f1aeb2c60bd7badcbafc352a9a2c5863c60c',
  'laravel/passport' => 'v8.3.1@98456cb16efd2ef7b41797e0a8559c9d8b4112f8',
  'laravel/tinker' => 'v1.0.10@ad571aacbac1539c30d480908f9d0c9614eaf1a7',
  'laravelium/sitemap' => 'v6.0.1@2b8e3b9f3ccd9ca7cdd3c21dcecf722eb1275d49',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'league/commonmark' => '1.2.2@34cf4ddb3892c715ae785c880e6691d839cff88d',
  'league/commonmark-ext-table' => 'v2.1.0@3228888ea69636e855efcf6636ff8e6316933fe7',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.0.63@8132daec326565036bc8e8d1876f77ec183a7bd6',
  'league/flysystem-cached-adapter' => '1.0.9@08ef74e9be88100807a3b92cc9048a312bf01d6f',
  'league/flysystem-sftp' => '1.0.22@cab59dd2277e02fe46f5f23195672a02ed49774d',
  'league/oauth2-server' => '8.0.0@e1dc4d708c56fcfa205be4bb1862b6d525b4baac',
  'maatwebsite/excel' => '3.1.18@d0231ab1f4bb93c8695630cb445ada1fdc54add0',
  'markbaker/complex' => '1.4.7@1ea674a8308baf547cbcbd30c5fcd6d301b7c000',
  'markbaker/matrix' => '1.2.0@5348c5a67e3b75cd209d70103f916a93b1f1ed21',
  'moneyphp/money' => 'v3.3.0@2a9b09bb5435aa54a404f626b9284ae64cb88af2',
  'monolog/monolog' => '2.0.2@c861fcba2ca29404dc9e617eedd9eff4616986b8',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nesbot/carbon' => '2.29.1@e509be5bf2d703390e69e14496d9a1168452b0a2',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'nwidart/laravel-modules' => '6.2.0@6dc702eeb5d025b4cd331bc394e47ccc43b68e89',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'opis/closure' => '3.5.1@93ebc5712cdad8d5f489b500c59d122df2e53969',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'phenx/php-font-lib' => '0.5.1@760148820110a1ae0936e5cc35851e25a938bc97',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/client-common' => '2.1.0@a8b29678d61556f45d6236b1667db16d998ceec5',
  'php-http/discovery' => '1.7.4@82dbef649ccffd8e4f22e1953c3a5265992b83c0',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/message' => '1.8.0@ce8f43ac1e294b54aabf5808515c3554a19c1e1c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoffice/phpspreadsheet' => '1.10.1@1648dc9ebef6ebe0c5a172e16cf66732918416e0',
  'phpoption/phpoption' => '1.7.2@77f7c4d2e65413aff5b5a8cc8b3caf7a28d81959',
  'phpseclib/phpseclib' => '2.0.11@7053f06f91b3de78e143d430e55a8f7889efc08b',
  'pimple/pimple' => 'v3.2.3@9e403941ef9d65d20cba7d54e29fe906db42cf32',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.9.12@90da7f37568aee36b116a030c5f99c915267edd4',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.2@7779489a47d443f845271badbdcedfe4df8e06fb',
  'sabberworm/php-css-parser' => '8.3.0@91bcc3e3fdb7386c9a2e0e0aa09ca75cc43f121f',
  'scrivo/highlight.php' => 'v9.18.0.0@0e7860058231b5bc843d1f5ac5c091be6b15b2d1',
  'sentry/sdk' => '2.1.0@18921af9c2777517ef9fb480845c22a98554d6af',
  'sentry/sentry' => '2.3.2@b3e71feb32f1787b66a3b4fdb8686972e9c7ba94',
  'sentry/sentry-laravel' => '1.2.0@1e351d2257de312dfa3bdb5544b55e587bd4c00a',
  'smarcet/jose4php' => '1.0.17@665ea87d1e4cf0e59564a131a9194c3ce0c7ac19',
  'spatie/laravel-honeypot' => '1.4.0@67a89380b26376e821a54278df97850d92c1273f',
  'spatie/laravel-permission' => '3.6.0@0a063ce206c7545737d19c1beda12003fc66e4e9',
  'stripe/stripe-php' => 'v7.21.1@6c23253581928c35322616c527d0a97e47267ec3',
  'studio-42/elfinder' => '2.1.53@bff6f1a3eb651f2b1e1b2f94a343aa9edc5d725a',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/console' => 'v4.4.4@f512001679f37e6a042b51897ed24a2f05eba656',
  'symfony/css-selector' => 'v5.0.3@ff60c90cb7950b592ebc84ad1289d0345bf24f9f',
  'symfony/debug' => 'v4.4.3@89c3fd5c299b940333bc6fe9f1b8db1b0912c759',
  'symfony/error-handler' => 'v4.4.4@d2721499ffcaf246a743e01cdf6696d3d5dd74c1',
  'symfony/event-dispatcher' => 'v4.4.3@9e3de195e5bc301704dd6915df55892f6dfc208b',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/finder' => 'v4.4.4@3a50be43515590faf812fbd7708200aabc327ec3',
  'symfony/http-foundation' => 'v4.4.7@62f92509c9abfd1f73e17b8cf1b72c0bdac6611b',
  'symfony/http-kernel' => 'v4.4.3@16f2aa3c54b08483fba5375938f60b1ff83b6bd2',
  'symfony/intl' => 'v5.0.3@2b3694976f02ed6a7894d8a772c9d55cee5d9677',
  'symfony/mime' => 'v5.0.3@2a3c7fee1f1a0961fa9cf360d5da553d05095e59',
  'symfony/options-resolver' => 'v5.0.7@09dccfffd24b311df7f184aa80ee7b61ad61ed8d',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-iconv' => 'v1.13.1@a019efccc03f1a335af6b4f20c30f5ea8060be36',
  'symfony/polyfill-intl-icu' => 'v1.13.1@b3dffd68afa61ca70f2327f2dd9bbeb6aa53d70b',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.14.0@34094cfa9abe1f0f14f48f490772db7a775559f2',
  'symfony/polyfill-php56' => 'v1.13.1@53dd1cdf3cb986893ccf2b96665b25b3abb384f4',
  'symfony/polyfill-php72' => 'v1.13.1@66fea50f6cb37a35eea048d75a7d99a45b586038',
  'symfony/polyfill-php73' => 'v1.14.0@5e66a0fa1070bf46bec4bea7962d285108edd675',
  'symfony/polyfill-util' => 'v1.13.1@964a67f293b66b95883a5ed918a65354fcd2258f',
  'symfony/polyfill-uuid' => 'v1.15.0@2318f7f470a892867f3de602e403d006b1b9c9aa',
  'symfony/process' => 'v4.4.4@f5697ab4cb14a5deed7473819e63141bf5352c36',
  'symfony/psr-http-message-bridge' => 'v1.3.0@9d3e80d54d9ae747ad573cad796e8e247df7b796',
  'symfony/routing' => 'v4.4.3@7bf4e38573728e317b926ca4482ad30470d0e86a',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/translation' => 'v4.4.3@f5d2ac46930238b30a9c2f1b17c905f3697d808c',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/var-dumper' => 'v4.4.3@7cfa470bc3b1887a7b2a47c0a702a84ad614fa92',
  'symfony/yaml' => 'v5.0.3@69b44e3b8f90949aee2eb3aa9b86ceeb01cbf62a',
  'teknoo/immutable' => '0.0.1@d40cb7ee0e869a06baaf10a5f4a18a9e23bf28c8',
  'teknoo/sellsy-client' => '2.0.8@19e20bb2c338e6bdb2840d672311f0748515589d',
  'tightenco/ziggy' => 'v0.8.1@4c4b29bc658153f0771b0a145173ce83a7b6b885',
  'tijsverkoyen/css-to-inline-styles' => '2.2.2@dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
  'vlucas/phpdotenv' => 'v3.6.0@1bdf24f065975594f6a117f0f1f6cabf1333b156',
  'barryvdh/laravel-debugbar' => 'v3.2.8@18208d64897ab732f6c04a19b319fe8f1d57a9c0',
  'beyondcode/laravel-dump-server' => '1.3.0@fcc88fa66895f8c1ff83f6145a5eff5fa2a0739a',
  'composer/ca-bundle' => '1.2.6@47fe531de31fca4a1b997f87308e7d7804348f7e',
  'composer/composer' => '1.9.3@1291a16ce3f48bfdeca39d64fca4875098af4d7b',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/spdx-licenses' => '1.5.3@0c3e51e1880ca149682332770e25977c70cf9dae',
  'composer/xdebug-handler' => '1.4.0@cbe23383749496fe0f373345208b79568e4bc248',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'justinrainbow/json-schema' => '5.2.9@44c6787311242a979fa15c704327c20e7221a0e4',
  'laravel/dusk' => 'v5.9.0@3e54875a69d2cb7136a56d9889c11eb2988c8eb4',
  'maximebf/debugbar' => 'v1.15.1@6c4277f6117e4864966c9cb58fb835cee8c74a1e',
  'mockery/mockery' => '1.3.1@f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be',
  'mpociot/laravel-test-factory-helper' => 'v1.3@cae981ca2be738e964d3f1f66bad178dcebdb9f4',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'nunomaduro/collision' => 'v3.0.1@af42d339fe2742295a54f6fdd42aaa6f8c4aca68',
  'nunomaduro/larastan' => 'v0.5.2@a4cc1d5861123ea4c6b5c966a092063fb70a144b',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-webdriver/webdriver' => '1.7.1@e43de70f3c7166169d0f14a374505392734160e5',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'phpmetrics/phpmetrics' => 'v2.5.0@2456b133664925836d2b807ed6403eb97dddb6c4',
  'phpspec/prophecy' => 'v1.10.2@b4400efc9d206e83138e2bb97ed7f5b14b831cd9',
  'phpstan/phpstan' => '0.12.11@ca5f2b7cf81c6d8fba74f9576970399c5817e03b',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.2@018b6ac3c8ab20916db85fa91bf6465acb64d1e0',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'seld/jsonlint' => '1.7.2@e2e5d290e4d2a4f0eb449f510071392e00e10d19',
  'seld/phar-utils' => '1.1.0@8800503d56b9867d43d9c303b9cbcc26016e82f0',
  'sensiolabs/security-checker' => 'v5.0.3@46be3f58adac13084497961e10eed9a7fb4d44d1',
  'squizlabs/php_codesniffer' => '3.5.3@557a1fc7ac702c66b0bbfe16ab3d55839ef724cb',
  'staudenmeir/dusk-updater' => 'v1.1.3@f3450cb8dbb9fdbc1a1aee144c666a44983394c2',
  'symfony/filesystem' => 'v4.4.4@266c9540b475f26122b61ef8b23dd9198f5d1cfd',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'laravel/laravel' => 'dev-hao-SAP2-1505@c8073d1bcd061e95030f9ceec23d8a2ee549e8eb',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
