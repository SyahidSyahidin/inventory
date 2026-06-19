## Items

### GET /api/items
Mengambil seluruh data item.

**Headers:**
- Authorization: Bearer {token}

**Response:** 200 OK
```json
{
    "status": "success",
    "data": [...],
    "message": "Berhasil menarik semua data Item"
}
```

---

### GET /api/items?category_id={id}
Filter items berdasarkan kategori (optional).

**Query Parameter:**
| Parameter   | Type    | Required | Description                      |
|-------------|---------|----------|-----------------------------------|
| category_id | integer | optional | ID kategori untuk memfilter item |

**Response sukses (ada item):** 200 OK
```json
{
    "status": "success",
    "data": [
        {
            "id": 5,
            "name": "laptop",
            "quantity": 2,
            "price": "20000.00",
            "category_id": 2
        }
    ],
    "message": "Berhasil menarik semua data Item"
}
```

**Response sukses (tidak ada item, array kosong):** 200 OK
```json
{
    "status": "success",
    "data": [],
    "message": "Berhasil menarik semua data Item"
}
```