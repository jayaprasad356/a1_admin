<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'barryvdh/laravel-dompdf' => 'v0.9.0@5b99e1f94157d74e450f4c97e8444fcaffa2144b',
  'box/spout' => 'v3.3.0@9bdb027d312b732515b884a341c0ad70372c6295',
  'brian2694/laravel-toastr' => '5.57@1274f58564b9d845dfe82d5aca60b99b6fbb5a71',
  'brick/math' => '0.10.2@459f2781e1a08d52ee56b0b1444086e038561e3f',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'dgvai/laravel-sslcommerz' => '1.0.4@b357221d2513be692f45e7587b4fdf0b169364c8',
  'doctrine/annotations' => '1.13.3@648b0343343565c4a056bfc8392201385e8d89f0',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/persistence' => '3.1.0@2a9c70a5e21f8968c5a46b79f819ea52f322080b',
  'dompdf/dompdf' => 'v1.2.2@5031045d9640b38cfc14aac9667470df09c9e090',
  'dragonmantank/cron-expression' => 'v2.3.1@65b2d8ee1f10915efb3b55597da3404f096acba2',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'evenement/evenement' => 'v3.0.1@531bfb9d15f8aa57454f5f0285b18bec903b8fb7',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'fig/http-message-util' => '1.1.5@9d94dc0154230ac39e5bf89398b324a86f63f765',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'friendsofphp/proxy-manager-lts' => 'v1.0.13@88354616f4cf4f6620910fd035e282173ba453e8',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'google/auth' => 'v1.23.1@cb43cb8ccde76ace65ec40130a9e9c2a15ecfe17',
  'google/cloud-core' => 'v1.45.0@28181b5ec2d40e9c9cdf2085096b33bac1f237fd',
  'google/cloud-storage' => 'v1.29.0@7b32f74023e4970159a489bd6ab703210e7c1d35',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'gregwar/captcha' => 'v1.1.9@4bb668e6b40e3205a020ca5ee4ca8cff8b8780c5',
  'guzzlehttp/guzzle' => '7.0.0@414c24961042f6616fb43e23fa69a785f9fc053e',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '1.9.0@e98e3e6d4f86621a9b75f623996e6bbdeb4b9318',
  'icecave/repr' => '4.0.0@3dad35ee43394404ae0f1926d754e7b7820da8e4',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'kingflamez/laravelrave' => 'v4.2.0@02ccc18e5f03fb25a12f898ddd180d88d0ed13d9',
  'kreait/clock' => '1.2@49e103382ca36cb2bc2e86ff3b8d11d44d0e0b31',
  'kreait/firebase-php' => '5.20.1@5c5c8f3e5d2ae07ed4e5e521392609b4f812b67c',
  'kreait/firebase-tokens' => '1.17.0@cad73174508a20961bae72a4c4a621208be83ee4',
  'kreait/laravel-firebase' => '3.1.0@c00ec1e3ce30e07ccdd6ea08712d8c75d0998ff5',
  'laminas/laminas-code' => '4.7.1@91aabc066d5620428120800c0eafc0411e441a62',
  'laminas/laminas-diactoros' => '2.22.0@df8c7f9e11d854269f4aa7c06ffa38caa42e4405',
  'laravel/framework' => 'v7.30.6@ecdafad1dda3c790af186a6d18479ea4757ef9ee',
  'laravel/passport' => 'v9.4.0@011bd500e8ae3d459b692467880a49ff1ecd60c0',
  'laravel/tinker' => 'v2.7.3@5062061b4924af3392225dd482ca7b4d85d8b8ef',
  'laravel/ui' => 'v2.4.0@f5398544a9cd4804a42d09ce51735e37cd51ea2d',
  'lcobucci/clock' => '2.2.0@fb533e093fd61321bfcbac08b131ce805fe183d3',
  'lcobucci/jwt' => '4.2.1@72ac6d807ee51a70ad376ee03a2387e8646e10f3',
  'league/commonmark' => '1.6.7@2b8185c13bc9578367a5bf901881d1c1b5bbd09b',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth2-server' => '8.3.6@28c5441716c10d0c936bd731860dc385d0f6d1a8',
  'league/uri' => '6.8.0@a700b4656e4c54371b799ac61e300ab25a2d1d39',
  'league/uri-interfaces' => '2.3.0@00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
  'madnest/madzipper' => 'v1.1.1@788211daf4555ecdacee341816720437d169c0cc',
  'mercadopago/dx-php' => '2.4.2@5b7e2e7ad87f957d712db0bc7cd84b3b1b20ffe0',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'nesbot/carbon' => '2.63.0@ad35dd71a6a212b98e4b87e97389b6fa85f0e347',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'nyholm/psr7' => '1.5.1@f734364e38a876a23be4d906a2a089e1315be18a',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.4.1@4498b5df7b08e8469f0f8279651ea5de9626ed02',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'phpseclib/phpseclib' => '2.0.39@f3a0e2b715c40cf1fd270d444901b63311725d63',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.9@1acec99d6684a54ff92f8b548a4e41b566963778',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.6.0@ad63bc700e7d021039e30ce464eba384c4a1d40f',
  'rap2hpoutre/fast-excel' => 'v3.2.0@28183f3a90179386bfadcd0083129c247ce49fbe',
  'ratchet/pawl' => 'v0.4.1@af70198bab77a582b31169d3cc3982bed25c161f',
  'ratchet/rfc6455' => 'v0.3.1@7c964514e93456a52a99a20fcfa0de242a43ccdb',
  'razorpay/razorpay' => '2.8.5@31027cfb689b9480d67419dbec7c203097e9d9ac',
  'react/cache' => 'v1.1.1@4bf736a2cccec7298bdf745db77585966fc2ca7e',
  'react/dns' => 'v1.10.0@a5427e7dfa47713e438016905605819d101f238c',
  'react/event-loop' => 'v1.3.0@187fb56f46d424afb6ec4ad089269c72eec2e137',
  'react/promise' => 'v2.9.0@234f8fd1023c9158e2314fa9d7d0e6a83db42910',
  'react/promise-timer' => 'v1.9.0@aa7a73c74b8d8c0f622f5982ff7b0351bc29e495',
  'react/socket' => 'v1.12.0@81e1b4d7f5450ebd8d2e9a95bb008bb15ca95a7b',
  'react/stream' => 'v1.2.0@7a423506ee1903e89f1e08ec5f0ed430ff784ae9',
  'recoil/api' => '1.0.2@4f9b3f2638157e277606fe51718c3a0106da7807',
  'recoil/kernel' => '1.0.5@aa80bf44a25a5be5c1fa7a2bb53def27a81fc188',
  'recoil/react' => '1.0.3@a928961155f2663a735fb03aa1c4941a3f70ff1a',
  'riverline/multipart-parser' => '2.0.9@ebba10245b5a6e03a673ff52c547d05029caedab',
  'rize/uri-template' => '0.3.5@5ed4ba8ea34af84485dea815d4b6b620794d1168',
  'rmccue/requests' => 'v2.0.5@b717f1d2f4ef7992ec0c127747ed8b7e170c2f49',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'signalwire/signalwire' => 'v2.3.10@b224ece32bc9b817d538fa6eefdbf7cc3003c068',
  'stella-maris/clock' => '0.1.7@fa23ce16019289a18bb3446fdecd45befcdd94f8',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/contracts' => 'v2.5.2@d3da2932c17d3cc0d6cd167518cc63ab7b909f38',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-iconv' => 'v1.27.0@927013f3aac555983a5059aada98e1907d842695',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-icu' => 'v1.27.0@a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/polyfill-uuid' => 'v1.27.0@f3cf1a645c2734236ed1e2e671e273eeb3586166',
  'symfony/psr-http-message-bridge' => 'v2.1.3@d444f85dddf65c7e57c58d8e5b3a4dbb593b1840',
  'symfony/symfony' => 'v5.4.15@cd78e1359c61b59b3541cfae1d46e0997862f11a',
  'tijsverkoyen/css-to-inline-styles' => '2.2.5@4348a3a06651827a27d989ad1d13efec6bb49b19',
  'twig/twig' => 'v3.4.3@c38fd6b0b7f370c198db91ffd02e23b517426b58',
  'twilio/sdk' => '6.43.3@9619630098a6846e89b0caa162589879be6749a5',
  'unicodeveloper/laravel-paystack' => '1.0.9@785aa1c5a1b07e06e2cc5c63f11e9dcf6c29a648',
  'vlucas/phpdotenv' => 'v4.3.0@67a491df68208bef8c37092db11fa3885008efcf',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.1@0e5c6bf4af22cae60a3f1098b75c25d70bac242f',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'barryvdh/laravel-debugbar' => 'v3.7.0@3372ed65e6d2039d663ed19aa699956f9d346271',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'facade/flare-client-php' => '1.10.0@213fa2c69e120bca4c51ba3e82ed1834ef3f41b8',
  'facade/ignition' => '2.17.6@6acd82e986a2ecee89e2e68adfc30a1936d1ab7c',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'filp/whoops' => '2.14.6@f7948baaa0330277c729714910336383286305da',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'maximebf/debugbar' => 'v1.18.1@ba0af68dd4316834701ecb30a00ce9604ced3ee9',
  'mockery/mockery' => '1.5.1@e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nunomaduro/collision' => 'v4.3.0@7c125dc2463f3e144ddc7e05e63077109508c94e',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '7.0.15@819f92bba8b001d4363065928088de22f25a3a48',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '4.0.4@a853a0e183b9db7eed023d7933a858fa1c8d25a3',
  'phpunit/phpunit' => '8.5.31@33c126b09a42de5c99e5e8032b54e8221264a74e',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.5@1dc7ceb4a24aede938c7af2a9ed1de09609ca770',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.5@73a9676f2833b9a7c36968f9d882589cd75511e6',
  'sebastian/global-state' => '3.0.2@de036ec91d55d2a9e0db2ba975b512cdb1c23921',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-master@146677c3724dc4d936a2e0dceb5ec38aa959a481',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
