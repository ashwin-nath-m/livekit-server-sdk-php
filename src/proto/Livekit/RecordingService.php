<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.8.1)
# source: livekit_recording.proto

declare(strict_types=1);

namespace Livekit;

/**
 * Recording service that can be performed on any node
 * they are Twirp-based HTTP req/responses
 *
 * Generated from protobuf service <code>livekit.RecordingService</code>
 */
interface RecordingService
{
    /**
     * Starts a room
     *
     * Generated from protobuf method <code>livekit.RecordingService/StartRecording</code>
     *
     * @throws \Twirp\Error
     */
    public function StartRecording(array $ctx, \Livekit\StartRecordingRequest $req): \Livekit\StartRecordingResponse;

    /**
     * Adds an rtmp output to a live recording
     *
     * Generated from protobuf method <code>livekit.RecordingService/AddOutput</code>
     *
     * @throws \Twirp\Error
     */
    public function AddOutput(array $ctx, \Livekit\AddOutputRequest $req): \Google\Protobuf\GPBEmpty;

    /**
     * Removes an rtmp output from a live recording
     *
     * Generated from protobuf method <code>livekit.RecordingService/RemoveOutput</code>
     *
     * @throws \Twirp\Error
     */
    public function RemoveOutput(array $ctx, \Livekit\RemoveOutputRequest $req): \Google\Protobuf\GPBEmpty;

    /**
     * Ends a recording
     *
     * Generated from protobuf method <code>livekit.RecordingService/EndRecording</code>
     *
     * @throws \Twirp\Error
     */
    public function EndRecording(array $ctx, \Livekit\EndRecordingRequest $req): \Google\Protobuf\GPBEmpty;
}
