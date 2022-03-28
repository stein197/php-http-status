<?php

namespace Stein197\Http;

use PHPUnit\Framework\TestCase;

class StatusTest extends TestCase {

	/**
	 * @dataProvider data
	 */
	public function test(Status $status, int $expectedCode, string $expectedMessage): void {
		$this->assertEquals($status->getCode(), $expectedCode);
		$this->assertEquals($status->getMessage(), $expectedMessage);
	}

	/**
	 * [status, expectedCode, expectedMessage]
	 */
	public function data(): array {
		return [
			[Status::Continue, 100, 'Continue'],
			[Status::SwitchingProtocols, 101, 'Switching Protocols'],
			[Status::OK, 200, 'OK'],
			[Status::Created, 201, 'Created'],
			[Status::Accepted, 202, 'Accepted'],
			[Status::NonAuthoritativeInformation, 203, 'Non-Authoritative Information'],
			[Status::NoContent, 204, 'No Content'],
			[Status::ResetContent, 205, 'Reset Content'],
			[Status::PartialContent, 206, 'Partial Content'],
			[Status::MultipleChoices, 300, 'Multiple Choices'],
			[Status::MovedPermanently, 301, 'Moved Permanently'],
			[Status::Found, 302, 'Found'],
			[Status::SeeOther, 303, 'See Other'],
			[Status::NotModified, 304, 'Not Modified'],
			[Status::UseProxy, 305, 'Use Proxy'],
			[Status::TemporaryRedirect, 307, 'Temporary Redirect'],
			[Status::BadRequest, 400, 'Bad Request'],
			[Status::Unauthorized, 401, 'Unauthorized'],
			[Status::PaymentRequired, 402, 'Payment Required'],
			[Status::Forbidden, 403, 'Forbidden'],
			[Status::NotFound, 404, 'Not Found'],
			[Status::MethodNotAllowed, 405, 'Method Not Allowed'],
			[Status::NotAcceptable, 406, 'Not Acceptable'],
			[Status::ProxyAuthenticationRequired, 407, 'Proxy Authentication Required'],
			[Status::RequestTimeout, 408, 'Request Timeout'],
			[Status::Conflict, 409, 'Conflict'],
			[Status::Gone, 410, 'Gone'],
			[Status::LengthRequired, 411, 'Length Required'],
			[Status::PreconditionFailed, 412, 'Precondition Failed'],
			[Status::RequestEntityTooLarge, 413, 'Request Entity Too Large'],
			[Status::RequestURITooLong, 414, 'Request-URI Too Long'],
			[Status::UnsupportedMediaType, 415, 'Unsupported Media Type'],
			[Status::RequestedRangeNotSatisfiable, 416, 'Requested Range Not Satisfiable'],
			[Status::ExpectationFailed, 417, 'Expectation Failed'],
			[Status::InternalServerError, 500, 'Internal Server Error'],
			[Status::NotImplemented, 501, 'Not Implemented'],
			[Status::BadGateway, 502, 'Bad Gateway'],
			[Status::ServiceUnavailable, 503, 'Service Unavailable'],
			[Status::GatewayTimeout, 504, 'Gateway Timeout'],
			[Status::HTTPVersionNotSupported, 505, 'HTTP Version Not Supported'],
		];
	}
}