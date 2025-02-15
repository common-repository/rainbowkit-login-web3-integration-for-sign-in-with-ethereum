<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4abfbaa0587feb36bb9050978df9fad5
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
        'W' => 
        array (
            'Web3\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'E' => 
        array (
            'Elliptic\\' => 9,
        ),
        'B' => 
        array (
            'BN\\' => 3,
            'BI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/keccak/src',
        ),
        'Web3\\' => 
        array (
            0 => __DIR__ . '/..' . '/web3p/web3.php/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Elliptic\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/elliptic-php/lib',
        ),
        'BN\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/bn-php/lib',
        ),
        'BI\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/bigint-wrapper-php/lib',
        ),
    );

    public static $classMap = array (
        'BI\\BigInteger' => __DIR__ . '/..' . '/simplito/bigint-wrapper-php/lib/BigInteger.php',
        'BN\\BN' => __DIR__ . '/..' . '/simplito/bn-php/lib/BN.php',
        'BN\\Red' => __DIR__ . '/..' . '/simplito/bn-php/lib/Red.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Elliptic\\Curve\\BaseCurve' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/BaseCurve.php',
        'Elliptic\\Curve\\BaseCurve\\Point' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/BaseCurve/Point.php',
        'Elliptic\\Curve\\EdwardsCurve' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/EdwardsCurve.php',
        'Elliptic\\Curve\\EdwardsCurve\\Point' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/EdwardsCurve/Point.php',
        'Elliptic\\Curve\\MontCurve' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/MontCurve.php',
        'Elliptic\\Curve\\MontCurve\\Point' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/MontCurve/Point.php',
        'Elliptic\\Curve\\PresetCurve' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/PresetCurve.php',
        'Elliptic\\Curve\\ShortCurve' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/ShortCurve.php',
        'Elliptic\\Curve\\ShortCurve\\JPoint' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/ShortCurve/JPoint.php',
        'Elliptic\\Curve\\ShortCurve\\Point' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curve/ShortCurve/Point.php',
        'Elliptic\\Curves' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Curves.php',
        'Elliptic\\EC' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/EC.php',
        'Elliptic\\EC\\KeyPair' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/EC/KeyPair.php',
        'Elliptic\\EC\\Signature' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/EC/Signature.php',
        'Elliptic\\EdDSA' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/EdDSA.php',
        'Elliptic\\EdDSA\\KeyPair' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/EdDSA/KeyPair.php',
        'Elliptic\\EdDSA\\Signature' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/EdDSA/Signature.php',
        'Elliptic\\HmacDRBG' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/HmacDRBG.php',
        'Elliptic\\Utils' => __DIR__ . '/..' . '/simplito/elliptic-php/lib/Utils.php',
        'GuzzleHttp\\BodySummarizer' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizer.php',
        'GuzzleHttp\\BodySummarizerInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\ClientTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientTrait.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\HeaderProcessor' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\MessageFormatterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Web3\\Contract' => __DIR__ . '/..' . '/web3p/web3.php/src/Contract.php',
        'Web3\\Contracts\\Ethabi' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Ethabi.php',
        'Web3\\Contracts\\SolidityType' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/SolidityType.php',
        'Web3\\Contracts\\Types\\Address' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/Address.php',
        'Web3\\Contracts\\Types\\Boolean' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/Boolean.php',
        'Web3\\Contracts\\Types\\Bytes' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/Bytes.php',
        'Web3\\Contracts\\Types\\DynamicBytes' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/DynamicBytes.php',
        'Web3\\Contracts\\Types\\IType' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/IType.php',
        'Web3\\Contracts\\Types\\Integer' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/Integer.php',
        'Web3\\Contracts\\Types\\Str' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/Str.php',
        'Web3\\Contracts\\Types\\Uinteger' => __DIR__ . '/..' . '/web3p/web3.php/src/Contracts/Types/Uinteger.php',
        'Web3\\Eth' => __DIR__ . '/..' . '/web3p/web3.php/src/Eth.php',
        'Web3\\Formatters\\AddressFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/AddressFormatter.php',
        'Web3\\Formatters\\BigNumberFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/BigNumberFormatter.php',
        'Web3\\Formatters\\BooleanFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/BooleanFormatter.php',
        'Web3\\Formatters\\HexFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/HexFormatter.php',
        'Web3\\Formatters\\IFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/IFormatter.php',
        'Web3\\Formatters\\IntegerFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/IntegerFormatter.php',
        'Web3\\Formatters\\NumberFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/NumberFormatter.php',
        'Web3\\Formatters\\OptionalQuantityFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/OptionalQuantityFormatter.php',
        'Web3\\Formatters\\PostFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/PostFormatter.php',
        'Web3\\Formatters\\QuantityFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/QuantityFormatter.php',
        'Web3\\Formatters\\StringFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/StringFormatter.php',
        'Web3\\Formatters\\TransactionFormatter' => __DIR__ . '/..' . '/web3p/web3.php/src/Formatters/TransactionFormatter.php',
        'Web3\\Methods\\EthMethod' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/EthMethod.php',
        'Web3\\Methods\\Eth\\Accounts' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/Accounts.php',
        'Web3\\Methods\\Eth\\BlockNumber' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/BlockNumber.php',
        'Web3\\Methods\\Eth\\Call' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/Call.php',
        'Web3\\Methods\\Eth\\Coinbase' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/Coinbase.php',
        'Web3\\Methods\\Eth\\CompileLLL' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/CompileLLL.php',
        'Web3\\Methods\\Eth\\CompileSerpent' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/CompileSerpent.php',
        'Web3\\Methods\\Eth\\CompileSolidity' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/CompileSolidity.php',
        'Web3\\Methods\\Eth\\EstimateGas' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/EstimateGas.php',
        'Web3\\Methods\\Eth\\GasPrice' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GasPrice.php',
        'Web3\\Methods\\Eth\\GetBalance' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetBalance.php',
        'Web3\\Methods\\Eth\\GetBlockByHash' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetBlockByHash.php',
        'Web3\\Methods\\Eth\\GetBlockByNumber' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetBlockByNumber.php',
        'Web3\\Methods\\Eth\\GetBlockTransactionCountByHash' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetBlockTransactionCountByHash.php',
        'Web3\\Methods\\Eth\\GetBlockTransactionCountByNumber' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetBlockTransactionCountByNumber.php',
        'Web3\\Methods\\Eth\\GetCode' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetCode.php',
        'Web3\\Methods\\Eth\\GetFilterChanges' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetFilterChanges.php',
        'Web3\\Methods\\Eth\\GetFilterLogs' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetFilterLogs.php',
        'Web3\\Methods\\Eth\\GetLogs' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetLogs.php',
        'Web3\\Methods\\Eth\\GetStorageAt' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetStorageAt.php',
        'Web3\\Methods\\Eth\\GetTransactionByBlockHashAndIndex' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetTransactionByBlockHashAndIndex.php',
        'Web3\\Methods\\Eth\\GetTransactionByBlockNumberAndIndex' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetTransactionByBlockNumberAndIndex.php',
        'Web3\\Methods\\Eth\\GetTransactionByHash' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetTransactionByHash.php',
        'Web3\\Methods\\Eth\\GetTransactionCount' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetTransactionCount.php',
        'Web3\\Methods\\Eth\\GetTransactionReceipt' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetTransactionReceipt.php',
        'Web3\\Methods\\Eth\\GetUncleByBlockHashAndIndex' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetUncleByBlockHashAndIndex.php',
        'Web3\\Methods\\Eth\\GetUncleByBlockNumberAndIndex' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetUncleByBlockNumberAndIndex.php',
        'Web3\\Methods\\Eth\\GetUncleCountByBlockHash' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetUncleCountByBlockHash.php',
        'Web3\\Methods\\Eth\\GetUncleCountByBlockNumber' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetUncleCountByBlockNumber.php',
        'Web3\\Methods\\Eth\\GetWork' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/GetWork.php',
        'Web3\\Methods\\Eth\\Hashrate' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/Hashrate.php',
        'Web3\\Methods\\Eth\\Mining' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/Mining.php',
        'Web3\\Methods\\Eth\\NewBlockFilter' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/NewBlockFilter.php',
        'Web3\\Methods\\Eth\\NewFilter' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/NewFilter.php',
        'Web3\\Methods\\Eth\\NewPendingTransactionFilter' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/NewPendingTransactionFilter.php',
        'Web3\\Methods\\Eth\\ProtocolVersion' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/ProtocolVersion.php',
        'Web3\\Methods\\Eth\\SendRawTransaction' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/SendRawTransaction.php',
        'Web3\\Methods\\Eth\\SendTransaction' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/SendTransaction.php',
        'Web3\\Methods\\Eth\\Sign' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/Sign.php',
        'Web3\\Methods\\Eth\\SubmitHashrate' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/SubmitHashrate.php',
        'Web3\\Methods\\Eth\\SubmitWork' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/SubmitWork.php',
        'Web3\\Methods\\Eth\\Syncing' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/Syncing.php',
        'Web3\\Methods\\Eth\\UninstallFilter' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Eth/UninstallFilter.php',
        'Web3\\Methods\\IMethod' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/IMethod.php',
        'Web3\\Methods\\IRPC' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/IRPC.php',
        'Web3\\Methods\\JSONRPC' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/JSONRPC.php',
        'Web3\\Methods\\Net\\Listening' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Net/Listening.php',
        'Web3\\Methods\\Net\\PeerCount' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Net/PeerCount.php',
        'Web3\\Methods\\Net\\Version' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Net/Version.php',
        'Web3\\Methods\\Personal\\ListAccounts' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Personal/ListAccounts.php',
        'Web3\\Methods\\Personal\\LockAccount' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Personal/LockAccount.php',
        'Web3\\Methods\\Personal\\NewAccount' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Personal/NewAccount.php',
        'Web3\\Methods\\Personal\\SendTransaction' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Personal/SendTransaction.php',
        'Web3\\Methods\\Personal\\UnlockAccount' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Personal/UnlockAccount.php',
        'Web3\\Methods\\Shh\\AddToGroup' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/AddToGroup.php',
        'Web3\\Methods\\Shh\\GetFilterChanges' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/GetFilterChanges.php',
        'Web3\\Methods\\Shh\\GetMessages' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/GetMessages.php',
        'Web3\\Methods\\Shh\\HasIdentity' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/HasIdentity.php',
        'Web3\\Methods\\Shh\\NewFilter' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/NewFilter.php',
        'Web3\\Methods\\Shh\\NewGroup' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/NewGroup.php',
        'Web3\\Methods\\Shh\\NewIdentity' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/NewIdentity.php',
        'Web3\\Methods\\Shh\\Post' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/Post.php',
        'Web3\\Methods\\Shh\\UninstallFilter' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/UninstallFilter.php',
        'Web3\\Methods\\Shh\\Version' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Shh/Version.php',
        'Web3\\Methods\\Web3\\ClientVersion' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Web3/ClientVersion.php',
        'Web3\\Methods\\Web3\\Sha3' => __DIR__ . '/..' . '/web3p/web3.php/src/Methods/Web3/Sha3.php',
        'Web3\\Net' => __DIR__ . '/..' . '/web3p/web3.php/src/Net.php',
        'Web3\\Personal' => __DIR__ . '/..' . '/web3p/web3.php/src/Personal.php',
        'Web3\\Providers\\HttpProvider' => __DIR__ . '/..' . '/web3p/web3.php/src/Providers/HttpProvider.php',
        'Web3\\Providers\\IProvider' => __DIR__ . '/..' . '/web3p/web3.php/src/Providers/IProvider.php',
        'Web3\\Providers\\Provider' => __DIR__ . '/..' . '/web3p/web3.php/src/Providers/Provider.php',
        'Web3\\RequestManagers\\HttpRequestManager' => __DIR__ . '/..' . '/web3p/web3.php/src/RequestManagers/HttpRequestManager.php',
        'Web3\\RequestManagers\\IRequestManager' => __DIR__ . '/..' . '/web3p/web3.php/src/RequestManagers/IRequestManager.php',
        'Web3\\RequestManagers\\RequestManager' => __DIR__ . '/..' . '/web3p/web3.php/src/RequestManagers/RequestManager.php',
        'Web3\\Shh' => __DIR__ . '/..' . '/web3p/web3.php/src/Shh.php',
        'Web3\\Utils' => __DIR__ . '/..' . '/web3p/web3.php/src/Utils.php',
        'Web3\\Validators\\AddressValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/AddressValidator.php',
        'Web3\\Validators\\BlockHashValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/BlockHashValidator.php',
        'Web3\\Validators\\BooleanValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/BooleanValidator.php',
        'Web3\\Validators\\CallValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/CallValidator.php',
        'Web3\\Validators\\FilterValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/FilterValidator.php',
        'Web3\\Validators\\HexValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/HexValidator.php',
        'Web3\\Validators\\IValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/IValidator.php',
        'Web3\\Validators\\IdentityValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/IdentityValidator.php',
        'Web3\\Validators\\NonceValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/NonceValidator.php',
        'Web3\\Validators\\PostValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/PostValidator.php',
        'Web3\\Validators\\QuantityValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/QuantityValidator.php',
        'Web3\\Validators\\ShhFilterValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/ShhFilterValidator.php',
        'Web3\\Validators\\StringValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/StringValidator.php',
        'Web3\\Validators\\TagValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/TagValidator.php',
        'Web3\\Validators\\TransactionValidator' => __DIR__ . '/..' . '/web3p/web3.php/src/Validators/TransactionValidator.php',
        'Web3\\Web3' => __DIR__ . '/..' . '/web3p/web3.php/src/Web3.php',
        'kornrunner\\Keccak' => __DIR__ . '/..' . '/kornrunner/keccak/src/Keccak.php',
        'phpseclib\\Crypt\\AES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/AES.php',
        'phpseclib\\Crypt\\Base' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Base.php',
        'phpseclib\\Crypt\\Blowfish' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Blowfish.php',
        'phpseclib\\Crypt\\DES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/DES.php',
        'phpseclib\\Crypt\\Hash' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Hash.php',
        'phpseclib\\Crypt\\RC2' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RC2.php',
        'phpseclib\\Crypt\\RC4' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RC4.php',
        'phpseclib\\Crypt\\RSA' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/RSA.php',
        'phpseclib\\Crypt\\Random' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Random.php',
        'phpseclib\\Crypt\\Rijndael' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Rijndael.php',
        'phpseclib\\Crypt\\TripleDES' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/TripleDES.php',
        'phpseclib\\Crypt\\Twofish' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Crypt/Twofish.php',
        'phpseclib\\File\\ANSI' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ANSI.php',
        'phpseclib\\File\\ASN1' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ASN1.php',
        'phpseclib\\File\\ASN1\\Element' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/ASN1/Element.php',
        'phpseclib\\File\\X509' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/File/X509.php',
        'phpseclib\\Math\\BigInteger' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Math/BigInteger.php',
        'phpseclib\\Net\\SCP' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SCP.php',
        'phpseclib\\Net\\SFTP' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SFTP.php',
        'phpseclib\\Net\\SFTP\\Stream' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SFTP/Stream.php',
        'phpseclib\\Net\\SSH1' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SSH1.php',
        'phpseclib\\Net\\SSH2' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/Net/SSH2.php',
        'phpseclib\\System\\SSH\\Agent' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent.php',
        'phpseclib\\System\\SSH\\Agent\\Identity' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/System/SSH/Agent/Identity.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4abfbaa0587feb36bb9050978df9fad5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4abfbaa0587feb36bb9050978df9fad5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4abfbaa0587feb36bb9050978df9fad5::$classMap;

        }, null, ClassLoader::class);
    }
}
