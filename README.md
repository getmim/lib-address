# lib-address

Module untuk menambah database alamat, dan menyediakan object filter.

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install lib-address
```

## Syncer

Module ini menambahkan satu library dengan nama `LibAddress\Library\Syncer` untuk
menambahkan konten address berdasarkan input user. Panggil method seperti di bawah
untuk menambah konten address:

```php
$body = [
    'country' => [1, 'id'],
    'state'   => ['Jawa Barat', 'name'],
    'city'    => ['Kab Bogor', 'name'],
    'district'=> ['Kec Leuwiliang', 'name'],
    'village' => ['Leuwiliang', 'name'],
    'zipcode' => ['16630', 'name']
];

LibAddress\Library\Syncer::sync($body);
```

## Object Filters

Module ini menyediakan object filter sebagai berikut:

1. `addr-country`
1. `addr-state`
1. `addr-city`
1. `addr-district`
1. `addr-village`
1. `addr-zip`

Semua filter di atas menerima property `query` untuk memfilter berdasrakan
`name`. Selain filter `addr-country`, filter tersebut juga menerima query string:

1. `parent` Filter berdasarkan parent object.
1. `pfn` Gunakan field `name` untuk memfilter parent, atau `id` jika tidak diset.