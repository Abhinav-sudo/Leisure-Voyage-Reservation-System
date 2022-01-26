DECLARE
clientname CHAR(15);
boatname CHAR(15);
seatno NUMBER(3);
tot_seats NUMBER(3);
resv_seats NUMBER(3);
BEGIN
clientname:='&clientname';
boatname:='&boatname';
SELECT tot_seats INTO tot_seats FROM bus_details WHERE boat_name=boatname;
SELECT reserved_seats INTO resv_seats FROM boat_details WHERE boat_name=boatname;
if tot_seats>resv_seats then
SELECT MIN(seat_id) INTO seatno FROM boatreservation_status WHERE boat_name=boatname and reserved='NO';
UPDATE boatreservation_status SET reserved='YES' WHERE boat_name=boatname and seat_no=seatno;
UPDATE busreservation_status SET client_name=clientname WHERE boat_name=boatname and seat_no=seatno;
UPDATE boat_details SET reserved_seats=reserved_seats+1 WHERE boat_name=boatname;
end if;
dbms_output.put_line('No seat avalable');
end;
