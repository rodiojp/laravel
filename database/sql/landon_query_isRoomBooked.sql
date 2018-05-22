-- isRoomBooked
SELECT count(*)
FROM reservations b
WHERE  
NOT (
    b.date_out < '2017-01-06' OR
    b.date_in > '2017-01-07'
)
and b.room_id = 3