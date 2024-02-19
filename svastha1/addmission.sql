CREATE VIEW patient_add AS 
    SELECT p.patientid,p.name,a.hospitalid,a.dateadd,p.phone,a.datediss,a.description,a.diseaseid
    FROM patient p JOIN admit a on p.patientid=a.patientid;



