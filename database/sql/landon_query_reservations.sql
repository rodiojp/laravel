-- reservations
SELECT room_id, date_in, date_out, client_id
FROM reservations
WHERE  
NOT (
    date_out < '2017-01-06' OR
    date_in > '2017-01-07'
)
and room_id = 3