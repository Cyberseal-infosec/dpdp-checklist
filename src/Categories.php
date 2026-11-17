<?php
namespace CyberSeal\Dpdp;

class Categories
{
    public static function all(): array
    {
        return [
            'Governance', 'Notice', 'Consent', 'Lawful Processing',
            'Data Principal Rights', 'Security', 'Breach Response',
            'Retention and Erasure', "Children's Data",
            'Processors and Vendors', 'Data Accuracy',
            'Cross-Border Transfer', 'Significant Data Fiduciary',
        ];
    }
}
