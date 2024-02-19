create table muncipal_details
(
    hospitalid varchar(10) NOT NULL,
    patientid int(10) UNSIGNED NOT NULL,
    diseaseid int(10) ,
    primary key(hospitalid,patientid,diseaseid),
    foreign key(hospitalid) references hospital_details(hospital_id) on delete cascade,
    foreign key(patientid) references patient(patient_id) on delete cascade,
    foreign key(diseaseid) references disease(disease_id) on delete cascade
);