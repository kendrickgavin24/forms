drop database rtrn;
create database rtrn;
use rtrn;
CREATE TABLE investigator(
    investigator_id INT(6) AUTO_INCREMENT,
    investigator_fname VARCHAR(30) NOT NULL,
    investigator_mname VARCHAR(30) NOT NULL,
    investigator_lname VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(investigator_id)
) AUTO_INCREMENT = 1001; 

CREATE TABLE main(
    main_id INT(6) AUTO_INCREMENT,
    investigator_id INT(6) NOT NULL,
    research_title VARCHAR(255) NOT NULL,
    protocol_ver INT(3) NOT NULL,
    ver_date DATE NOT NULL,
    meeting_date DATE NOT NULL,
    trb_decision CHAR(16) NOT NULL,
    deadline DATE NOT NULL,
    originator VARCHAR(255) NOT NULL,
    supervisor VARCHAR(255) NOT NULL,
    PRIMARY KEY(main_id),
    FOREIGN KEY(investigator_id) REFERENCES investigator(investigator_id)
); 

CREATE TABLE section(
    section_id INT(6) AUTO_INCREMENT,
    section VARCHAR(255) NOT NULL,
    PRIMARY KEY(section_id)
) AUTO_INCREMENT = 2001; 

CREATE TABLE trb_comments(
    trb_comments_id INT(6) AUTO_INCREMENT,
    tc_title VARCHAR(255) NOT NULL,
    tc_abs VARCHAR(255) NOT NULL,
    tc_intro VARCHAR(255) NOT NULL,
    tc_revOfLit VARCHAR(255) NOT NULL,
    tc_obj VARCHAR(255) NOT NULL,
    tc_sigOfTheStudy VARCHAR(255) NOT NULL,
    tc_scopeDelim VARCHAR(255) NOT NULL,
    tc_limitOfStudy VARCHAR(255) NOT NULL,
    tc_conFWork VARCHAR(255) NOT NULL,
    tc_opDefinition VARCHAR(255) NOT NULL,
    tc_studyDesign VARCHAR(255) NOT NULL,
    tc_popOfStudy VARCHAR(255) NOT NULL,
    tc_matMethods VARCHAR(255) NOT NULL,
    tc_safetyEfficacy VARCHAR(255) NOT NULL,
    tc_algOfStudy VARCHAR(255) NOT NULL,
    tc_statAnalysis VARCHAR(255) NOT NULL,
    tc_dummyTables VARCHAR(255) NOT NULL,
    tc_ethicalCon VARCHAR(255) NOT NULL,
    tc_budget VARCHAR(255) NOT NULL,
    tc_timetable VARCHAR(255) NOT NULL,
    tc_ref VARCHAR(255) NOT NULL,
    tc_appendices VARCHAR(255) NOT NULL,
    section_id INT(6) NOT NULL,
    PRIMARY KEY(trb_comments_id),
    FOREIGN KEY(section_id) REFERENCES section(section_id)
)AUTO_INCREMENT = 3001;

CREATE TABLE action_taken(
    at_id INT(6) AUTO_INCREMENT,
    at_title VARCHAR(255) NOT NULL,
    at_abs VARCHAR(255) NOT NULL,
    at_intro VARCHAR(255) NOT NULL,
    at_revOfLit VARCHAR(255) NOT NULL,
    at_obj VARCHAR(255) NOT NULL,
    at_sigOfTheStudy VARCHAR(255) NOT NULL,
    at_scopeDelim VARCHAR(255) NOT NULL,
    at_limitOfStudy VARCHAR(255) NOT NULL,
    at_conFWork VARCHAR(255) NOT NULL,
    at_opDefinition VARCHAR(255) NOT NULL,
    at_studyDesign VARCHAR(255) NOT NULL,
    at_popultcionOfStudy VARCHAR(255) NOT NULL,
    at_matMethods VARCHAR(255) NOT NULL,
    at_safetyEfficacy VARCHAR(255) NOT NULL,
    at_algOfStudy VARCHAR(255) NOT NULL,
    at_statAnalysis VARCHAR(255) NOT NULL,
    at_dummyTables VARCHAR(255) NOT NULL,
    at_ethicalCon VARCHAR(255) NOT NULL,
    at_budget VARCHAR(255) NOT NULL,
    at_timetable VARCHAR(255) NOT NULL,
    at_ref VARCHAR(255) NOT NULL,
    at_appendices VARCHAR(255) NOT NULL,
    section_id INT(6) NOT NULL,
    PRIMARY KEY(at_id),
    FOREIGN KEY(section_id) REFERENCES section(section_id)
)AUTO_INCREMENT = 4001;

CREATE TABLE page(
    page_id INT(6) AUTO_INCREMENT,
    page_title INT(4) NOT NULL,
    page_abs INT(4) NOT NULL,
    page_intro INT(4) NOT NULL,
    page_revOfLit INT(4) NOT NULL,
    page_obj INT(4) NOT NULL,
    page_sigOfTheStudy INT(4) NOT NULL,
    page_scopeDelim INT(4) NOT NULL,
    page_limitOfStudy INT(4) NOT NULL,
    page_conFWork INT(4) NOT NULL,
    page_opDefinition INT(4) NOT NULL,
    page_studyDesign INT(4) NOT NULL,
    page_popOfStudy INT(4) NOT NULL,
    page_matMethods INT(4) NOT NULL,
    page_safetyEfficacy INT(4) NOT NULL,
    page_algOfStudy INT(4) NOT NULL,
    page_statAnalysis INT(4) NOT NULL,
    page_dummyTables INT(4) NOT NULL,
    page_ethicalCon INT(4) NOT NULL,
    page_budget INT(4) NOT NULL,
    page_timetable INT(4) NOT NULL,
    page_ref INT(4) NOT NULL,
    page_appendices INT(4) NOT NULL,
    section_id INT(6) NOT NULL,
    PRIMARY KEY(page_id),
    FOREIGN KEY(section_id) REFERENCES section(section_id)
)AUTO_INCREMENT = 5001;

CREATE TABLE stap(
    stap_id INT(6) AUTO_INCREMENT,
    section_id INT(6) NOT NULL,
    main_id INT(6) NOT NULL,
    PRIMARY KEY(stap_id),
    FOREIGN KEY(section_id) REFERENCES section(section_id),
    FOREIGN KEY(main_id) REFERENCES main(main_id)
) AUTO_INCREMENT = 6001;

/* 	investigator_id 1001
	section_id 2001
*/

INSERT INTO section (section) VALUES ('Title'), ('Abstract'), ('Intoduction'), ('Review of Related Literature'), ('Objectives'), ('Significance of the Study'), ('Scope and Delimitation'), ('Limitations of the Study'), ('Conceptual Framework'), ('Operational Definition '), ('Study Design'), ('Population of the Study'), ('Materials and Methods'), ('Safety and Efficacy (for Clinical Trials)'), ('Algorithm of the Study'), ('Statistical Analysis'), ('Dummy Tables'), ('Ethical Considerations'), ('Budget'), ('Timetable'), ('References'), ('Appendices')

