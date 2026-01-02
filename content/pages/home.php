<?php

use App\Models\Language;
use App\Models\Service;

return[
  'seoDescription' => Language::trans('home.description'),
  'hero' => [
    [
      'title' => Language::trans('home.hero.slide1.title'),
      'text' => Language::trans('home.hero.slide1.text')
    ],
    [
      'title' => Language::trans('home.hero.slide2.title'),
      'text' => Language::trans('home.hero.slide2.text')
    ],
    [
      'title' => Language::trans('home.hero.slide3.title'),
      'text' => Language::trans('home.hero.slide3.text')
    ],
    [
      'title' => Language::trans('home.hero.slide4.title'),
      'text' => Language::trans('home.hero.slide4.text')
    ],
    [
      'title' => Language::trans('home.hero.slide5.title'),
      'text' => Language::trans('home.hero.slide5.text')
    ],
    [
      'title' => Language::trans('home.hero.slide6.title'),
      'text' => Language::trans('home.hero.slide6.text')
    ],
    [
      'title' => Language::trans('home.hero.slide7.title'),
      'text' => Language::trans('home.hero.slide7.text')
    ],
    [
      'title' => Language::trans('home.hero.slide8.title'),
      'text' => Language::trans('home.hero.slide8.text')
    ],
    [
      'title' => Language::trans('home.hero.slide9.title'),
      'text' => Language::trans('home.hero.slide9.text')
    ],
    [
      'title' => Language::trans('home.hero.slide10.title'),
      'text' => Language::trans('home.hero.slide10.text')
    ]
  ],
  'discover' => [
    [
      'title' => Language::trans('home.discover_list.item1.title'),
      'text' => Language::trans('home.discover_list.item1.text'),
      'icon' => 'grow',
      'animation' => 'up'
    ],
    [
      'title' => Language::trans('home.discover_list.item2.title'),
      'text' => Language::trans('home.discover_list.item2.text'),
      'icon' => 'smart-ecosystem',
      'animation' => 'up'
    ],
    [
      'title' => Language::trans('home.discover_list.item3.title'),
      'text' => Language::trans('home.discover_list.item3.text'),
      'icon' => 'total-impact',
      'animation' => 'down'
    ],
    [
      'title' => Language::trans('home.discover_list.item4.title'),
      'text' => Language::trans('home.discover_list.item4.text'),
      'icon' => 'digital-inteligence',
      'animation' => 'down'
    ]
  ],
  'technologies' => [
    [
      'title' => Language::trans('home.tech_list.item1.title'),
      'text' => Language::trans('home.tech_list.item1.text')
    ],
    [
      'title' => Language::trans('home.tech_list.item2.title'),
      'text' => Language::trans('home.tech_list.item2.text')
    ],
    [
      'title' => Language::trans('home.tech_list.item3.title'),
      'text' => Language::trans('home.tech_list.item3.text')
    ]
  ],
  'team_members' => [
    [
      'name' => 'Eduardo',
      'job' => Language::trans('home.team_jobs.ceo'),
      'description' => Language::trans('home.team_description.lalo'),
      'image' => 'lalo.webp'
    ],
    [
      'name' => 'Mauxi',
      'job' => Language::trans('home.team_jobs.hr_operations_lead'),
      'description' => Language::trans('home.team_description.mauxi'),
      'image' => 'mauxi.webp'
    ],
    [
      'name' => 'Daniel',
      'job' => Language::trans('home.team_jobs.chairman'),
      'description' => Language::trans('home.team_description.daniel'),
      'image' => 'daniel_cruz.webp'
    ],
    [
      'name' => 'Ilyra',
      'job' => Language::trans('home.team_jobs.hr_tech_lead'),
      'description' => Language::trans('home.team_description.ilyra'),
      'image' => 'ilyra.webp'
    ],
    [
      'name' => 'Ana',
      'job' => Language::trans('home.team_jobs.legal_advisor'),
      'description' => Language::trans('home.team_description.ana'),
      'image' => 'ana.webp'
    ],
    [
      'name' => 'Beatriz',
      'job' => Language::trans('home.team_jobs.pmo'),
      'description' => Language::trans('home.team_description.eli'),
      'image' => 'beatriz_garcia.webp'
    ],
    [
      'name' => 'Lizbeth',
      'job' => Language::trans('home.team_jobs.client_manager'),
      'description' => Language::trans('home.team_description.eli'),
      'image' => 'lizbeth.webp'
    ],
    [
      'name' => 'José Luis',
      'job' => Language::trans('home.team_jobs.logistics_operations'),
      'description' => Language::trans('home.team_description.jose_duarte'),
      'image' => 'jose_duarte.webp'
    ],
    [
      'name' => 'Geovani',
      'job' => Language::trans('home.team_jobs.cto'),
      'description' => Language::trans('home.team_description.geo'),
      'image' => 'geo.webp'
    ],
    [
      'name' => 'Fernando',
      'job' => Language::trans('home.team_jobs.cmo'),
      'description' => Language::trans('home.team_description.fer'),
      'image' => 'fer.webp'
    ]
  ],
  'stats' => [
    [
      'number' => '7+',
      'title' => Language::trans('home.statistics.list.item1.feature'),
      'text' => Language::trans('home.statistics.list.item1.text')
    ],
    [
      'number' => '16+',
      'title' => Language::trans('home.statistics.list.item2.feature'),
      'text' => Language::trans('home.statistics.list.item2.text')
    ],
    [
      'number' => '100+',
      'title' => Language::trans('home.statistics.list.item3.feature'),
      'text' => Language::trans('home.statistics.list.item3.text')
    ],
    [
      'number' => '500k+',
      'title' => Language::trans('home.statistics.list.item4.feature'),
      'text' => Language::trans('home.statistics.list.item4.text')
    ],
    [
      'number' => '500+',
      'title' => Language::trans('home.statistics.list.item5.feature'),
      'text' => Language::trans('home.statistics.list.item5.text')
    ],
    [
      'number' => '1b+',
      'title' => Language::trans('home.statistics.list.item6.feature'),
      'text' => Language::trans('home.statistics.list.item6.text')
    ]
  ],
  'ecosystem' => [
    Language::trans('home.ecosystem.problems.item1'),
    Language::trans('home.ecosystem.problems.item2'),
    Language::trans('home.ecosystem.problems.item3'),
    Language::trans('home.ecosystem.problems.item4'),
    Language::trans('home.ecosystem.problems.item5'),
    Language::trans('home.ecosystem.problems.item6'),
    Language::trans('home.ecosystem.problems.item7')
  ],
  'cases' => [
    [
      'name' => 'Darevita',
      'text' => Language::trans('home.cases.darevita'),
      'image' => 'darevita.webp'
    ],
    [
      'name' => 'Apolus',
      'text' => Language::trans('home.cases.apolus'),
      'image' => 'apolus.webp'
    ],
    [
      'name' => 'Doctors Net',
      'text' => Language::trans('home.cases.doctors_net'),
      'image' => 'doctors-net.webp'
    ],
    [
      'name' => 'EXMA',
      'text' => Language::trans('home.cases.exma'),
      'image' => 'exma.webp'
    ],
    [
      'name' => 'EVO',
      'text' => Language::trans('home.cases.evo'),
      'image' => 'evo.webp'
    ]
  ],
  'solutions' => [
    [
      'es' => 'Marketing de referidos',
      'en' => 'Referral marketing',
      'description' => Language::trans('servsub.referral_marketing'),
      'image' => 'referral_marketing.webp',
      'services' => Service::getBySubcategory('referral-marketing', Language::getCurrentLanguage())
    ],
    [
      'es' => 'Desarrollo Blockchain',
      'en' => 'Blockchain development',
      'description' => Language::trans('servsub.blockchain'),
      'image' => 'blockchain_dev.webp',
      'services' => Service::getBySubcategory('blockchain', Language::getCurrentLanguage())
    ],
    [
      'es' => 'Servicios personalizados',
      'en' => 'Custom services',
      'description' => Language::trans('servsub.custom_services'),
      'image' => 'custom_services.webp',
      'services' => Service::getBySubcategory('custom-software', Language::getCurrentLanguage())
    ],
    [
      'es' => 'Servicios creativos',
      'en' => 'Creative services',
      'description' => Language::trans('servsub.creative_services'),
      'image' => 'creative_services.webp',
      'services' => Service::getBySubcategory('creative-services', Language::getCurrentLanguage())
    ],
    [
      'es' => 'Servicios de logística',
      'en' => 'Logistic services',
      'description' => Language::trans('servsub.logistic_services'),
      'image' => 'logistic.webp'
    ],
    [
      'es' => 'Servicios financieros',
      'en' => 'Finance services',
      'description' => Language::trans('servsub.finance_services'),
      'image' => 'finance.webp'
    ],
    [
      'es' => 'Servicios legales',
      'en' => 'Legal and compliance services',
      'description' => Language::trans('servsub.legal_services'),
      'image' => 'legal_compliance.webp'
    ],
    [
      'es' => 'Servicios de procesamiento de pagos',
      'en' => 'Payment processing services',
      'description' => Language::trans('servsub.payment_processing'),
      'image' => 'payment_process.webp',
      'services' => Service::getBySubcategory('payment-processing', Language::getCurrentLanguage())
    ],
    [
      'es' => 'Servicios de RR.HH.',
      'en' => 'HR Services',
      'description' => Language::trans('servsub.hr'),
      'image' => 'hr_services.webp',
      'services' => Service::getBySubcategory('hr', Language::getCurrentLanguage())
    ],
    [
      'es' => 'Servicios de manofactura',
      'en' => 'Manufacturing Services',
      'description' => Language::trans('servsub.manufacturing'),
      'image' => 'manufacturing.webp'
    ],
    [
      'es' => 'Servicios de CS',
      'en' => 'CS Services',
      'description' => Language::trans('servsub.cs'),
      'image' => 'cs_services.webp'
    ],
  ]
];
