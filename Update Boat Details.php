DECLARE
boatname CHAR(20);
tot_seats NUMBER(3);
resv_seats NUMBER(3);
CURSOR cur IS SELECT * FROM boat_details;
BEGIN
INSERT INTO boat_details VALUES('&boat_name',&tot_seatsal_seats,0);
OPEN cur;
loop
FETCH cur INTO boatname,tot_seats,resv_seats;
if cur % found then
for i in 1..tot_seats
loop
INSERT INTO boatreservation_status VALUES(boatname,i,'NO',NULL);
end loop;
else
exit;
end if;
end loop;
lose cur;
end; 
