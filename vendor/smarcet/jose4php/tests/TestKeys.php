<?php
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

final class TestKeys {

    static $private_key_pem = <<<PPK
-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAirzNFCTd6gbFC1qjC/6+RagsQgZL7Xqt+K26dNv7S0vp7d2I
LFLzhV+cug3BDN8j1HofCH5QVn3FNma2KvYTUmalc8Wt2F+OUzWAOyrXnG3ed8Ih
UI6PWu+1AM3UEzAoVnrp6Dh8ON2IL/+qJMZ1u/n00wfpLSVLpS7GT5QBpOtbHw/x
ndCVF+jm8+H4jc9s6ZGA9bs6e0dSytC3/ZTQAm8Qytc1ok5WGDl8o3EvvmlgbzWH
fCCSfvjozbS0vtcfVx43igd3rdpZrjc7R5HxobCtRBffXXiv5PWNK4gMORhrZjtZ
AGZugT54PASMLxE+KuDnCLJvjM7Ebzm7Lx5AbQIDAQABAoIBADaPSyMp4G+BXAo8
CbTU6KTiHw2UBlYNEc+jGpmMTUXuQ7+8iCnOMWB5Glx8vje+pQuRPxUK/7MT4POk
7uz0OuMD5PsjeVuHMKR+fMBH9+TXvE5idNGGTtAXRppbV5R4MtTXn5coZ4nBbSZb
J+Ewfup+wQ4gpU2Qxi/etjRjY0YkiB4YM7WYMq0aPlcRakjMAG+jojZpv33Dtn1g
zpNsyPwpM+Nl9QrUsE7YRDATuQ7b+flCE0DZyZzzxfze6VVn62Gkeg4mUNTf0DMn
Xw6vrwhRoMUG/VCVGJHvUotc6CqQzjw3p8UYcptzWynNvO24pFSKxT+wlndWnK/O
BpfzTOECgYEAxUOcQ34NaP1z4fzCuFOD2+giRycDwgioulo73/+R/muiTMzbNU6V
ED3V3qnc4+SmP8QaSltu3RoL670mL8t8JOHRiWOkmS3Ayy34NI9YT9KLPuVi42Fi
bhgzKd2KVnB33Aji3v1AWO+9/WTgfovLGJDfyq3OGc1MdLcTkU2q6VUCgYEAtAwF
PQzcbcvhAVYztYhqFny18H4SclgG9SmJ3kwcEGKe4A50YiNfhygMb5hMLql89Bjk
3HOnNHVKkRaB7CPdcuOEIOsImW9qh1mAl0/aYOrsAh/5K4wt2Jm3IRNLD+PafZMa
eclMK3s2fmKFGaHT/OKIf3h7zMEtTjw1opNFGrkCgYEAg4FhKTVdZ0KgAGXqwcsb
Onz0bQ67WJ1BLop9JAVSpJPIrP5cnJr4kM1ISJpg4aRKmHP5OtzdeZSlodCFJpO2
/Td14uuEjYGM52aL8y4kp4IqxhFR7Ve8sLx9T0mbsahkn1FlPVcDkMayl7yqVHKJ
QKVEK+/WWCke8SgjaVinuckCgYBiHZLVPCb7ZnlNgy5WpOo7KubzEaD30uSnwWUy
UQOSIkw2CWp++IvcWYS9Y59QZmiDlPVS9WuO+MQT4NIYX0sUisu8LJjZFJBXBf0/
d/Knkh3e4pGkm5V4Tfwv+BWVqTOt7vYkm//4SgLeSM4Ds96UFtcPsBa29Ca+Va1c
1Sh5cQKBgCGKPCh74r1HbW8SYIB4hYHhaNUmvpkDAwO+4xyloznL8maFxlszN9ti
X2kWWDT2UCEjyptCKHWWV+QsB5PgHujDz/L/b0lPJDKYo1yGFTnhPWP2+RStFJmj
rNGkVMzt/U6N4rAE6agF6RnJMJ2lsnqhXqevqu5WaR3yRLdwgUUs
-----END RSA PRIVATE KEY-----
PPK;

static $public_key_pem = <<<PK
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAirzNFCTd6gbFC1qjC/6+
RagsQgZL7Xqt+K26dNv7S0vp7d2ILFLzhV+cug3BDN8j1HofCH5QVn3FNma2KvYT
Umalc8Wt2F+OUzWAOyrXnG3ed8IhUI6PWu+1AM3UEzAoVnrp6Dh8ON2IL/+qJMZ1
u/n00wfpLSVLpS7GT5QBpOtbHw/xndCVF+jm8+H4jc9s6ZGA9bs6e0dSytC3/ZTQ
Am8Qytc1ok5WGDl8o3EvvmlgbzWHfCCSfvjozbS0vtcfVx43igd3rdpZrjc7R5Hx
obCtRBffXXiv5PWNK4gMORhrZjtZAGZugT54PASMLxE+KuDnCLJvjM7Ebzm7Lx5A
bQIDAQAB
-----END PUBLIC KEY-----
PK;


    static $private_key2_pem = <<<PK
-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAjPgFLioz99KFn5keMWpMQDTqqx8BAJjTaey+Vs1+GnZvhAOh
E6G222oXXNRpMYW783whzVBvZjN1DVGVnNKMXmjLEvEKIasWXxkFtx6bkjwL74jZ
ODh3BlaP0ulaottRX7/X8hnYKDRBgkZNkyUmUZQsk+YAnaioi5lpTwLYz8ENS3pH
kBwCNh1zPAAXmSwItKl5MwnuyIZlrKfP0SEMGuDwvC7e6yU8JOwHxKf8Im8FLQAN
6DQmPhHsb9ARDwtxX/mjLluROVJsGbCZ18jWUxxjFUs3AMJhGc57h3+6zgPDj+J8
120Rj+HJfEQS6gE5oI/lpkurpI00QypmzdN6TwIDAQABAoIBADaGdFJ/5mvz1NV/
fysz51xqW15m9pdJhXSSKqkegKkxqD6SvMoAId9KcNDqI+oQxTsPh2+Hrh8ExkCp
jsoCsmKN/AZOj1GogFW2Mvy6bQgqC5/R+dsCFB+yeZzlv7YASMBVTuyIzI/4bmI6
WSUSGHkza+6k5xYUN2UPqKjz+/KXMVYdom7OMDQOka5i2mbkqvCblx/3Z3eI55n5
7mIZ2Uv9MS6Vu1U/y6vdDIGpX05hWRwju/ZrFpr4BUNVpabIpoT0TseDyHqp9Za3
LFms6ISUJsTVzUEm9Utux2+R9tYE7fWIdQlbKyyDAj0j2ml/cK+f7xQwejtm3ux8
JmZJD+kCgYEAwaiMuMGTzyB+JSe8L5Um5ZlL+jM7z8nIDztHbwFBe1osmLBEKfW8
2wNsv0br/0FN4TtvSl1r2u+SlLV9MF1BeOi8BRg5mnhD9y3KU1p7NKlFY8ZZmiZz
xAHIT/9BJXhbeQGGP6UEMOaTjPTx4z8HOxdsKQB5mM0FCHbfoI2AduMCgYEAullO
cTjop7nDkChRBu5te1wDhtICyHeilY2G8+n6F29U7TtDCzbrM/DxpptYiwkimY1G
EgpNW8w5UFJYXJMlPg/mMWmn7WsJ6NyKk1rIPeFWV6ebf1qfgJSTFT16NsR/GPmw
Pz0h/LrQwjfHvkhccp+Nm59phjlzcdIt14a63qUCgYAzGBBAsroXvN/rV6d7+mMv
0plMIvZV5UwGUMKRFAi9zdXUVzU0yOQR+L5ZXRHo38b3dOHxAeLx+aF34MZt2zzp
9KWexnx0N+Tes1MdWNMG2t426986H4kNntbF3HfItg+URoWwBw6rBDrLxtiG91sm
CRD9ZGWwne8FA7AOwSaytwKBgQCLdrsWUZkNriGGiiXaIicd48df51zd22t6sekG
M15Qm6nbwjZy9i8hOHoiTrD9nWCfuvNuHPe4dCeQzZAD+LwuroeBA6oCLdHEzQmJ
LrAeX77W60GdFp25BXjutIv64SSd9IDLU11UYBxMvqJm7pEB2BeLGMtJAUY9MSfN
3a+NYQKBgA6v5SgAgEJzLwt2D7v3ZiCvJChN+a5+dgT9bF+NvsvD6vAh84dxEY04
pjkVOii3g/Ojo7XC+qMJS0qmrFAeTaS3V6tI4YWnIl1K0lEzpudZqjdoxGtgLFCT
41Vpn218WeNyjiutHS7LOu0os0Wo4gZVOnJhCuJ1+zIZoKKokKQM
-----END RSA PRIVATE KEY-----
PK;

    static $public_key2_pem = <<<PK
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjPgFLioz99KFn5keMWpM
QDTqqx8BAJjTaey+Vs1+GnZvhAOhE6G222oXXNRpMYW783whzVBvZjN1DVGVnNKM
XmjLEvEKIasWXxkFtx6bkjwL74jZODh3BlaP0ulaottRX7/X8hnYKDRBgkZNkyUm
UZQsk+YAnaioi5lpTwLYz8ENS3pHkBwCNh1zPAAXmSwItKl5MwnuyIZlrKfP0SEM
GuDwvC7e6yU8JOwHxKf8Im8FLQAN6DQmPhHsb9ARDwtxX/mjLluROVJsGbCZ18jW
UxxjFUs3AMJhGc57h3+6zgPDj+J8120Rj+HJfEQS6gE5oI/lpkurpI00QypmzdN6
TwIDAQAB
-----END PUBLIC KEY-----
PK;

  static $private_key_with_pass_rs256 = <<< PEM
-----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: DES-EDE3-CBC,2E2866BC106075C2

z40nBtNtE+TWL+iLd4GKPw9vCeUno05fh8/b82Bk/MFpIZLw+zwH4wJKIkh40aH+
tWSIP4A46z+a0qQarkgJ3K8rcphswiKErMom8L81PLe6COdEHvNdDQjuuLtBNGmG
WHv1pRDK7DBgYWj0Y2VnU8tmUetUmUfSUM43eT+u1JSyBsZOUPuKq8hKXMWULRBK
+R1thMWlfmMuGle8NJEcSRJW6xJwe/HZm6XuVKetRy5e5oLlbsZNwQguaITO8XY6
qaN/96+876fE3KSvUiPJADl75Zw2sPmdZBqyAUK9/wEhHUAyF8z+UOS7WQwt3GD6
+FUAwmgIE/rcxUOwP+V3x7mSg64jz4IRdkr0cCLuHX4c6IkyiwSBktGzePprJq7L
Yn2kR2pK6Ll/Hag1GsB9w5a9Feg6uhu5i1LhjSCVkOTp7nv70uYquDd4K5fnKvUg
aBUT5cnZuzvxym0vc9+he3/5qxx9Cp0Folp/t97lO372JEdS+RafbTtanUnOjLfh
HNLZy54ThhYUYCJOdGwfsVFhLXXttKo2UyD7SDT29MfDuLbeN4QfCEorPQcAqJpV
a2FD0ZRUFOp4QMDaH2VXG3O4UbROinsSB7o03mkwHu0wapJOsMVA+aaHVJ/NWXqd
HcImIdV5HY/+Z38T8wckrJkP6jaxfsfEJ3bP3BV713Yt3WJDG1Z0ylvAwY0NPcDa
n/YUpqLqJgYpIh8jErPIanpKS4nETMbY9MQOh4zUuCnhz7caauko0W+tbGa5BeFS
xUITlXYDWCf2BTFnrehQTSXRDiPrU0g8pe06HZMvhr5IiHs7/mIQ6BAh8djH3P+s
iirN5kgQoR8kxhNRWUHXgJ3RZzxfamc0cc2RcjQQyRQ69j5TTLO8wRUeCUt4bJfs
sNwR4lyTmCYu1AHaOSFFYr1paI/hTKZUMx1drEUXpSpqlP6CtfJK89Hx1J5Wq89d
wTo34bj9A/DsX0CeACiqyA4/rP7A8JyuqrnxkfyxHerzsQFII3OKUgVvDE+63ZnU
q/WhhVQZ77AUizmLIJ18CApYP8+KgchE9pZDuAZgduZCleBFG5HHIystVYtBcBfL
ELJWVzLp9G1q3tODXJaGHfLDtgx7agHQKK6DH/yaIEXRNUHewrqpbWwj2zeQyQH9
/VhQROQVxk32/o2E/3e7e2cUrfH5p3U3l7+foFeuy1h1qcdSwZXQk14RElBvRpe8
PYoa3b01LUzx6YSxIDaDVWGIvOQ1IRZowOMKY4U0C+jVGEnbjd1pvAuzNVwdkSmk
xFyNzW3KIU+xbV24v0ucYGKJgnnd6YElqxfjUJHO9nx741kQbaP9IywZ3OA4SAp+
bLiAI5TTmQUE6IU7c2NInRWZpudVt4MCsMYoGU0UFbO3qRP87dnCVhgViU9ZEzSK
ooh+O13p0TRjMqRkbEQuBpePVLHxRvMZd4v+gaDR6LyTKKr/084Zqw+BSPpnaohK
9xxucuEW2x1XTJyohrI6N+gbQwBuL1CnsxoXwCh50AMkYOcCX9tYbB+tXrE9BnIe
FuAHFuZLmdBo/jLVji+WVZkWgvR7NYumBZo7gqo38fsBZZl8p+h2YQ==
-----END RSA PRIVATE KEY-----
PEM;


}