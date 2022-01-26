CREATE TABLE boat_details(boat_name CHAR(20)PRIMARY KEY, tot_seats NUMBER(3), reserved_seats NUMBER(3)) ;

CREATE TABLE boatreservation_status(boat_name CHAR(20) REFERENCES boat_details(boat_name),seat_no NUMBER(3),reserved CHAR(3) CHECK(reserved in('YES','NO')),client_name CHAR(20));
