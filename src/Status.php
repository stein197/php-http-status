<?php

namespace Stein197\Http;

use function Stein197\Caser\split;

/**
 * Enum that defines all standard HTTP status codes corresponding to RFC 2616.
 * @link https://datatracker.ietf.org/doc/html/rfc2616#section-10 RFC 2616.
 */
enum Status: int {
	case Continue = 100;
	case SwitchingProtocols = 101;
	case OK = 200;
	case Created = 201;
	case Accepted = 202;
	case NonAuthoritativeInformation = 203;
	case NoContent = 204;
	case ResetContent = 205;
	case PartialContent = 206;
	case MultipleChoices = 300;
	case MovedPermanently = 301;
	case Found = 302;
	case SeeOther = 303;
	case NotModified = 304;
	case UseProxy = 305;
	case TemporaryRedirect = 307;
	case BadRequest = 400;
	case Unauthorized = 401;
	case PaymentRequired = 402;
	case Forbidden = 403;
	case NotFound = 404;
	case MethodNotAllowed = 405;
	case NotAcceptable = 406;
	case ProxyAuthenticationRequired = 407;
	case RequestTimeout = 408;
	case Conflict = 409;
	case Gone = 410;
	case LengthRequired = 411;
	case PreconditionFailed = 412;
	case RequestEntityTooLarge = 413;
	case RequestURITooLong = 414;
	case UnsupportedMediaType = 415;
	case RequestedRangeNotSatisfiable = 416;
	case ExpectationFailed = 417;
	case InternalServerError = 500;
	case NotImplemented = 501;
	case BadGateway = 502;
	case ServiceUnavailable = 503;
	case GatewayTimeout = 504;
	case HTTPVersionNotSupported = 505;

	/**
	 * Returns status code.
	 * @return int Status code.
	 */
	public function getCode(): int {
		return $this->value;
	}

	/**
	 * Returns default message.
	 * @return string Default message.
	 */
	public function getMessage(): string {
		return match ($this) {
			self::NonAuthoritativeInformation => 'Non-Authoritative Information',
			self::RequestURITooLong => 'Request-URI Too Long',
			default => join(' ', split($this->name))
		};
	}
}