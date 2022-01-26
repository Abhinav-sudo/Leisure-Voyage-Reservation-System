Declare
clientname char(15);
boatname char(15);
seatno number(3);
resv_seats number(3);
BEGIN
clientname:='&clientname';
boatname:='&boatname';
SELECT seat_id INTO seatno FROM busreservation_status WHERE boat_name=boatname and client_name=clientname;
SELECT reserved_seats INTO resv_seats FROM bus_details WHERE boat_name=boatname;
if resv_seats<0 then
dbms_output.put_line('Cancelation not allow');
else
UPDATE boatreservation_status set reserved='n' where bus_name=boatname and seat_id=seatno;
UPDATE boatreservation_status set customer_name=null WHERE bus_name=boatname and seat_id=seatno;
UPDATE bus_details set reserved_seats=reserved_seats-1 WHERE bus_name=boatname;
end if;
end;
