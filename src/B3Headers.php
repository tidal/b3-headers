<?php

namespace Tidal\Zipkin;

/**
 * Interface Tidal\Zipkin\B3Headers.
 *
 */
interface B3Headers
{
    /**
     * The X-B3-TraceId header is required and is encoded as 32 or 16 lower-hex characters.
     * For example, a 128-bit TraceId header might look like: X-B3-TraceId: 463ac35c9f6413ad48485a3953bb6124
     */
    public const TRACE_ID = 'X-B3-TraceId';

    /**
     * The X-B3-SpanId header is required and is encoded as 16 lower-hex characters.
     * For example, a SpanId header might look like: X-B3-SpanId: a2fb4a1d1a96d312
     */
    public const SPAN_ID = 'X-B3-SpanId';

    /**
     * The X-B3-ParentSpanId header must be present on a child span and absent on the root span.
     * It is encoded as 16 lower-hex characters.
     * For example, a ParentSpanId header might look like: X-B3-ParentSpanId: 0020000000000001
     */
    public const PARENT_SPAN_ID = 'X-B3-ParentSpanId';

    /**
     * The X-B3-Sampled header is encoded as "1" or "0".
     * Absent means defer the decision to the receiver of this header.
     * For example, a Sampled header might look like: X-B3-Sampled: 1
     */
    public const SAMPLED = 'X-B3-Sampled';

    /**
     * Debug is encoded as X-B3-Flags: 1.
     * Since Debug implies Sampled, so don't also send "X-B3-Sampled: 1".
     */
    public const FLAGS = 'X-B3-Flags';
}
