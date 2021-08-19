<?php

namespace srag\Plugins\OnlyOffice\StorageService;

use srag\Plugins\OnlyOffice\StorageService\Infrastructure\File\ilDBFileRepository;
use srag\Plugins\OnlyOffice\Utils\OnlyOfficeTrait;

class InfoService
{
    use OnlyOfficeTrait;

    public static function getOpenSetting(int $file_id): string {
        return self::onlyOffice()->objectSettings()->getObjectSettingsById($file_id)->getOpen();
    }

    public static final function getBaseUrl(): string{
        return self::onlyOffice()->config()->getValue("baseurl");
    }

    public static final function getOnlyOfficeUrl(): string {
        return self::onlyOffice()->config()->getValue("onlyoffice_url");
    }

    public static final function getSecret(): string {
        return self::onlyOffice()->config()->getValue("onlyoffice_secret");
    }

}