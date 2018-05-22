SELECT r.id, r.name
FROM rooms r
WHERE r.id NOT IN (
    SELECT b.room_id
    FROM reservations b
    WHERE NOT (
        b.date_out < '2017-01-06' OR
        b.date_in > '2017-01-07'
    )
)
ORDER BY r.id