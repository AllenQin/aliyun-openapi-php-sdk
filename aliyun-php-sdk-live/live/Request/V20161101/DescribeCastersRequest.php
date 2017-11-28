<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Live\Request\V20161101;

use Aliyun\CoreRpcAcsRequest;

class DescribeCastersRequest extends RpcAcsRequest
{
    private $securityToken;
    private $casterName;
    private $casterId;
    private $pageSize;
    private $endTime;
    private $startTime;
    private $ownerId;
    private $pageNum;
    private $version;
    private $status;

    function __construct()
    {
        parent::__construct("Live", "2016-11-01", "DescribeCasters");
        $this->setMethod("POST");
    }

    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    public function setSecurityToken($securityToken)
    {
        $this->securityToken = $securityToken;
        $this->queryParameters["SecurityToken"] = $securityToken;
    }

    public function getCasterName()
    {
        return $this->casterName;
    }

    public function setCasterName($casterName)
    {
        $this->casterName = $casterName;
        $this->queryParameters["CasterName"] = $casterName;
    }

    public function getCasterId()
    {
        return $this->casterId;
    }

    public function setCasterId($casterId)
    {
        $this->casterId = $casterId;
        $this->queryParameters["CasterId"] = $casterId;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->queryParameters["PageSize"] = $pageSize;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->queryParameters["EndTime"] = $endTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->queryParameters["StartTime"] = $startTime;
    }

    public function getOwnerId()
    {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
        $this->queryParameters["PageNum"] = $pageNum;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
        $this->queryParameters["Version"] = $version;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->queryParameters["Status"] = $status;
    }

}