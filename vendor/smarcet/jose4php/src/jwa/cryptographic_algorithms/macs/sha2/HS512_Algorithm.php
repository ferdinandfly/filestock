<?php namespace jwa\cryptographic_algorithms\macs\sha2;
/**
 * Copyright 2015 OpenStack Foundation
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/
use jwa\cryptographic_algorithms\macs\HSMAC_Algorithm;
use jwa\JSONWebSignatureAndEncryptionAlgorithms;
/**
 * Class HS512_Algorithm
 * @package jwa\cryptographic_algorithms\macs\sha2
 */
final class HS512_Algorithm extends HSMAC_Algorithm {

    /**
     * @return int
     */
    public function getMinKeyLen()
    {
        return 512;
    }

    public function getHashingAlgorithm()
    {
        return 'sha512';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return JSONWebSignatureAndEncryptionAlgorithms::HS512;
    }

    /**
     * hash key size in bits
     * @return int
     */
    public function getHashKeyLen()
    {
        return $this->getMinKeyLen();
    }
}