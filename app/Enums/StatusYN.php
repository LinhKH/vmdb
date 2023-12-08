<?php

namespace App\Enums;

/**
 * ステータス(Yes or No)
 * @method static StatusYN NO()
 * @method static StatusYN YES()
 */
class StatusYN
{
    public const YES = 'Y';
    public const NO = 'N';

    protected static $descriptions = [
        self::YES => 'はい',
        self::NO => 'いいえ',
    ];

    /**
     * 管理画面の表示色
     * @param string $status
     * @return string
     * @throws \Exception
     */
    public static function getColorForHernanes8(string $status): string
    {
        switch ($status) {
            case self::YES:
                return 'color_blue';
            case self::NO:
                return 'color_red';
            default:
                throw new \Exception('$statusの値が不正');
        }
    }

    public static function getColorForAffiliateList(string $status): string
    {
        switch ($status) {
            case self::YES:
                return 'color_red';
            case self::NO:
                return 'color_blue';
            default:
                throw new \Exception('$statusの値が不正');
        }
    }

    /**
     * 有り/無しの文字列での表現
     * @param string $status
     * @return string
     * @throws \Exception
     */
    public static function getDescriptionForExistence(string $status): string
    {
        switch ($status) {
            case self::YES:
                return '有り';
            case self::NO:
                return '無し';
            default:
                throw new \Exception('$statusの値が不正');
        }
    }

    /**
     * アフィリエイト一覧画面用
     * @param string $status
     * @return string
     * @throws \Exception
     */
    public static function getDescriptionForAffiliate(string $status): string
    {
        switch ($status) {
            case self::YES:
                return 'あり';
            case self::NO:
                return 'なし';
            default:
                throw new \Exception('$statusの値が不正');
        }
    }

    /**
     * 領収書発行フラグ用の descriptions
     * @param string $status
     * @return string
     * @throws \Exception
     */
    public static function getDescriptionForReceipt(string $status): string
    {
        switch ($status) {
            case self::YES:
                return '有り';
            case self::NO:
                return '無し';
            default:
                throw new \Exception('$statusの値が不正');
        }
    }


    /**
     * 管理画面の表示色
     * @param string $member_yn
     * @return string
     */
    public static function getColorForHernanes8BizCloud(string $member_yn): string
    {
        switch ($member_yn) {
            case self::YES:
                return 'color_blue';
            case self::NO:
                return 'color_gray';
            default:
                return '';
        }
    }

    /**
     * Biz/Cloud問合せ画面の有り/無し
     * @param string $status
     * @return string
     * @throws \Exception
     */
    public static function getDescriptionForReceiptBizCloud(string $status): string
    {
        switch ($status) {
            case self::YES:
                return '有り';
            case self::NO:
                return '無し';
            default:
                return '';
        }
    }

    public static function getDescriptionForReceiptBizCloudArray(): array
    {
        return [
            self::YES => '有り',
            self::NO => '無し',
        ];
    }

    public static function getDescriptionForCompanyLogAffiliateArray(): array
    {
        return [
            self::YES => 'あり',
            self::NO => 'なし',
        ];
    }

    public static function getDescriptionForCompanyLogDiscountArray(): array
    {
        return [
            self::YES => '適用',
            self::NO => '不適用',
        ];
    }
}
