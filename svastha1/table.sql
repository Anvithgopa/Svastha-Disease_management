create table muncipal
(
    usermail varchar(25),
    password varchar(25)
);
create table hospital
(
    hospital_name varchar(25),
    hmail varchar(25),
    hpassword varchar(25) 
);
create table publicuser
(
    pusermail varchar(25),
    ppassword varchar(25)
)
create table disease_details
(
    disease_name varchar(25),
    disease_id varchar(25),
    primary key (disease_id)
);
create table hospital_details
(
    hospital_name varchar(25)
    hospital_id varchar(25)
    hospital_loc varchar(25)
    primary key(hospital_id)
);
create table patient
(
    patient_id archar(25),
    patient_name varchar(25),
    pdate date,
    plocation varchar(25),
    patientno varchar(25)
    primary key(patient_id)
);
create table patient_details
(
    patient_id varchar(25),
    name varchar(25),
    dateadd date,
    datedischarge date,
    hospital_id varchar(25),
    description varchar(25),
    patientno varchar(25),
    disease_id varchar(25),
    primary key(patient_id,hospital_id,disease_id),
    foreign key(patient_id) references patient(patient_id) on delete cascade
    foreign key(hospital_id) references hospital_details(hospital_id) on delete cascade
    foreign key(disease_id) references disease_details(disease_id) on delete cascade
);
create table muncipal(
    hospital_id varchar(25),
    patient_id varchar(25),
    disease_id varchar(25),
    primary key(patient_id,hospital_id,disease_id),
    foreign key(patient_id) references patient(patient_id) on delete cascade
    foreign key(hospital_id) references hospital_details(hospital_id) on delete cascade
    foreign key(disease_id) references disease_details(disease_id) on delete cascade
);
