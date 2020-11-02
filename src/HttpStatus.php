<?php

declare(strict_types = 1);

namespace Kmvan\HttpStatus;

class HttpStatus
{
    public const __default = self::OK;

    public const CONTINUE = 100;

    public const SWITCHING_PROTOCOLS = 101;

    public const PROCESSING = 102; // WEBDAV;_RFC_2518

    public const OK = 200;

    public const CREATED = 201;

    public const ACCEPTED = 202;

    public const NON_AUTHORITATIVE_INFORMATION = 203; // SINCE_HTTP/1.1

    public const NO_CONTENT = 204;

    public const RESET_CONTENT = 205;

    public const PARTIAL_CONTENT = 206;

    public const MULTI_STATUS = 207; // WEBDAV;_RFC_4918

    public const ALREADY_REPORTED = 208; // WEBDAV;_RFC_5842

    public const IM_USED = 226; // RFC_3229

    public const MULTIPLE_CHOICES = 300;

    public const MOVED_PERMANENTLY = 301;

    public const FOUND = 302;

    public const SEE_OTHER = 303; // SINCE_HTTP/1.1

    public const NOT_MODIFIED = 304;

    public const USE_PROXY = 305; // SINCE_HTTP/1.1

    public const SWITCH_PROXY = 306;

    public const TEMPORARY_REDIRECT = 307; // SINCE_HTTP/1.1

    public const PERMANENT_REDIRECT = 308; // APPROVED_AS_EXPERIMENTAL_RFC

    public const BAD_REQUEST = 400;

    public const UNAUTHORIZED = 401;

    public const PAYMENT_REQUIRED = 402;

    public const FORBIDDEN = 403;

    public const NOT_FOUND = 404;

    public const METHOD_NOT_ALLOWED = 405;

    public const NOT_ACCEPTABLE = 406;

    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    public const REQUEST_TIMEOUT = 408;

    public const CONFLICT = 409;

    public const GONE = 410;

    public const LENGTH_REQUIRED = 411;

    public const PRECONDITION_FAILED = 412;

    public const REQUEST_ENTITY_TOO_LARGE = 413;

    public const REQUEST_URI_TOO_LONG = 414;

    public const UNSUPPORTED_MEDIA_TYPE = 415;

    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;

    public const EXPECTATION_FAILED = 417;

    public const I_AM_A_TEAPOT = 418;

    public const AUTHENTICATION_TIMEOUT = 419; // NOT_IN_RFC_2616

    public const ENHANCE_YOUR_CALM = 420; // TWITTER

    public const METHOD_FAILURE = 420; // SPRING_FRAMEWORK

    public const UNPROCESSABLE_ENTITY = 422; // WEBDAV;_RFC_4918

    public const LOCKED = 423; // WEBDAV;_RFC_4918

    public const FAILED_DEPENDENCY = 424; // WEBDAV

    public const UNORDERED_COLLECTION = 425; // INTERNET_DRAFT

    public const UPGRADE_REQUIRED = 426; // RFC_2817

    public const PRECONDITION_REQUIRED = 428; // RFC_6585

    public const TOO_MANY_REQUESTS = 429; // RFC_6585

    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431; // RFC_6585

    public const NO_RESPONSE = 444; // NGINX

    public const RETRY_WITH = 449; // MICROSOFT

    public const BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450; // MICROSOFT

    public const REDIRECT = 451; // MICROSOFT

    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451; // INTERNET_DRAFT

    public const REQUEST_HEADER_TOO_LARGE = 494; // NGINX

    public const CERT_ERROR = 495; // NGINX

    public const NO_CERT = 496; // NGINX

    public const HTTP_TO_HTTPS = 497; // NGINX

    public const CLIENT_CLOSED_REQUEST = 499; // NGINX

    public const INTERNAL_SERVER_ERROR = 500;

    public const NOT_IMPLEMENTED = 501;

    public const BAD_GATEWAY = 502;

    public const SERVICE_UNAVAILABLE = 503;

    public const GATEWAY_TIMEOUT = 504;

    public const HTTP_VERSION_NOT_SUPPORTED = 505;

    public const VARIANT_ALSO_NEGOTIATES = 506; // RFC_2295

    public const INSUFFICIENT_STORAGE = 507; // WEBDAV;_RFC_4918

    public const LOOP_DETECTED = 508; // WEBDAV;_RFC_5842

    public const BANDWIDTH_LIMIT_EXCEEDED = 509; // APACHE_BW/LIMITED_EXTENSION

    public const NOT_EXTENDED = 510; // RFC_2774

    public const NETWORK_AUTHENTICATION_REQUIRED = 511; // RFC_6585

    public const NETWORK_READ_TIMEOUT_ERROR = 598; // UNKNOWN

    public const NETWORK_CONNECT_TIMEOUT_ERROR = 599; // Unknown
}
