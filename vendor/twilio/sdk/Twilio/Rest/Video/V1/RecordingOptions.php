<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

abstract class RecordingOptions {
    /**
     * @param string $status Only show Recordings with the given status.
     * @param string $sourceSid Only show the Recordings with the given source Sid.
     * @param string $groupingSid Only show Recordings that have this GroupingSid.
     * @param \DateTime $dateCreatedAfter Only show Recordings that started on or
     *                                    after this ISO8601 date-time with
     *                                    timezone.
     * @param \DateTime $dateCreatedBefore Only show Recordings that started before
     *                                     this ISO8601 date-time with timezone.
     * @return ReadRecordingOptions Options builder
     */
    public static function read($status = Values::NONE, $sourceSid = Values::NONE, $groupingSid = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE) {
        return new ReadRecordingOptions($status, $sourceSid, $groupingSid, $dateCreatedAfter, $dateCreatedBefore);
    }
}

class ReadRecordingOptions extends Options {
    /**
     * @param string $status Only show Recordings with the given status.
     * @param string $sourceSid Only show the Recordings with the given source Sid.
     * @param string $groupingSid Only show Recordings that have this GroupingSid.
     * @param \DateTime $dateCreatedAfter Only show Recordings that started on or
     *                                    after this ISO8601 date-time with
     *                                    timezone.
     * @param \DateTime $dateCreatedBefore Only show Recordings that started before
     *                                     this ISO8601 date-time with timezone.
     */
    public function __construct($status = Values::NONE, $sourceSid = Values::NONE, $groupingSid = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE) {
        $this->options['status'] = $status;
        $this->options['sourceSid'] = $sourceSid;
        $this->options['groupingSid'] = $groupingSid;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
    }

    /**
     * Only show Recordings with the given status.
     * 
     * @param string $status Only show Recordings with the given status.
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Only show the Recordings with the given source Sid (you can use this to filter Recordings by `TrackSid` for Video Room Recordings.
     * 
     * @param string $sourceSid Only show the Recordings with the given source Sid.
     * @return $this Fluent Builder
     */
    public function setSourceSid($sourceSid) {
        $this->options['sourceSid'] = $sourceSid;
        return $this;
    }

    /**
     * Only show Recordings that have this GroupingSid, which may include a ParticipantSid and/or a RoomSid.
     * 
     * @param string $groupingSid Only show Recordings that have this GroupingSid.
     * @return $this Fluent Builder
     */
    public function setGroupingSid($groupingSid) {
        $this->options['groupingSid'] = $groupingSid;
        return $this;
    }

    /**
     * Only show Recordings that started on or after this ISO8601 date-time with timezone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     * 
     * @param \DateTime $dateCreatedAfter Only show Recordings that started on or
     *                                    after this ISO8601 date-time with
     *                                    timezone.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Only show Recordings that started before this ISO8601 date-time with timezone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     * 
     * @param \DateTime $dateCreatedBefore Only show Recordings that started before
     *                                     this ISO8601 date-time with timezone.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.ReadRecordingOptions ' . implode(' ', $options) . ']';
    }
}