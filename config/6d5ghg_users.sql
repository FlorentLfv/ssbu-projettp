#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: characters
#------------------------------------------------------------

CREATE TABLE characters(
        idCharacters Int  Auto_increment  NOT NULL ,
        name         Varchar (50) NOT NULL ,
        imgCharacter Varchar (120) NOT NULL
	,CONSTRAINT characters_PK PRIMARY KEY (idCharacters)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: guides
#------------------------------------------------------------

CREATE TABLE guides(
        idGuide      Int  Auto_increment  NOT NULL ,
        guide        Text NOT NULL ,
        idCharacters Int NOT NULL
	,CONSTRAINT guides_PK PRIMARY KEY (idGuide)

	,CONSTRAINT guides_characters_FK FOREIGN KEY (idCharacters) REFERENCES characters(idCharacters)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: frameData
#------------------------------------------------------------

CREATE TABLE frameData(
        idFrameData     Int  Auto_increment  NOT NULL ,
        frameData       Varchar (40) NOT NULL ,
        moveName        Varchar (25) NOT NULL ,
        frameStartup    Int NOT NULL ,
        onShield        Int NOT NULL ,
        activeFrame     Int NOT NULL ,
        totalFrame      Int NOT NULL ,
        frameLandingLag Int NOT NULL ,
        frameShieldLag  Int NOT NULL ,
        frameShieldStun Int NOT NULL ,
        multipleHitbox  Varchar (25) NOT NULL ,
        idCharacters    Int NOT NULL
	,CONSTRAINT frameData_PK PRIMARY KEY (idFrameData)

	,CONSTRAINT frameData_characters_FK FOREIGN KEY (idCharacters) REFERENCES characters(idCharacters)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE roles(
        idRoles  Int  Auto_increment  NOT NULL ,
        roleName Varchar (50) NOT NULL
	,CONSTRAINT roles_PK PRIMARY KEY (idRoles)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: townZip
#------------------------------------------------------------

CREATE TABLE townZip(
        idCity   Int  Auto_increment  NOT NULL ,
        cityName Varchar (60) NOT NULL ,
        zipCode  Int NOT NULL
	,CONSTRAINT townZip_PK PRIMARY KEY (idCity)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: 6d5ghg_Users
#------------------------------------------------------------

CREATE TABLE 6d5ghg_Users(
        idUser       Int  Auto_increment  NOT NULL ,
        pseudo       Varchar (30) NOT NULL ,
        mail         Varchar (100) NOT NULL ,
        password     Varchar (60) NOT NULL ,
        idCharacters Int NOT NULL ,
        idRoles      Int NOT NULL ,
        idCity       Int NOT NULL
	,CONSTRAINT 6d5ghg_Users_PK PRIMARY KEY (idUser)

	,CONSTRAINT 6d5ghg_Users_characters_FK FOREIGN KEY (idCharacters) REFERENCES characters(idCharacters)
	,CONSTRAINT 6d5ghg_Users_roles0_FK FOREIGN KEY (idRoles) REFERENCES roles(idRoles)
	,CONSTRAINT 6d5ghg_Users_townZip1_FK FOREIGN KEY (idCity) REFERENCES townZip(idCity)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: videos
#------------------------------------------------------------

CREATE TABLE videos(
        idVideos   Int  Auto_increment  NOT NULL ,
        nameVideo  Varchar (60) NOT NULL ,
        titleVideo Varchar (60) ,
        pathVideos Varchar (120) NOT NULL ,
        idGuide    Int NOT NULL
	,CONSTRAINT videos_PK PRIMARY KEY (idVideos)

	,CONSTRAINT videos_guides_FK FOREIGN KEY (idGuide) REFERENCES guides(idGuide)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: images
#------------------------------------------------------------

CREATE TABLE images(
        idImages   Int  Auto_increment  NOT NULL ,
        nameImage  Varchar (50) NOT NULL ,
        titleImage Varchar (50) NOT NULL ,
        pathImages Varchar (120) NOT NULL ,
        idGuide    Int NOT NULL
	,CONSTRAINT images_PK PRIMARY KEY (idImages)

	,CONSTRAINT images_guides_FK FOREIGN KEY (idGuide) REFERENCES guides(idGuide)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: matchUp
#------------------------------------------------------------

CREATE TABLE matchUp(
        idMatchup      Int  Auto_increment  NOT NULL ,
        muChartImg     Varchar (50) NOT NULL ,
        muChartImgAlt  Varchar (50) NOT NULL ,
        muChartImgPath Varchar (120) NOT NULL ,
        muChartTitle   Varchar (50) NOT NULL ,
        idCharacters   Int NOT NULL
	,CONSTRAINT matchUp_PK PRIMARY KEY (idMatchup)

	,CONSTRAINT matchUp_characters_FK FOREIGN KEY (idCharacters) REFERENCES characters(idCharacters)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gifFrameData
#------------------------------------------------------------

CREATE TABLE gifFrameData(
        idGifFrameData      Int  Auto_increment  NOT NULL ,
        nameGifFrameData    Varchar (50) NOT NULL ,
        titleGifFrameData   Varchar (50) NOT NULL ,
        altNameGifFrameData Varchar (50) NOT NULL ,
        pathGifFrameData    Varchar (120) NOT NULL ,
        idFrameData         Int NOT NULL
	,CONSTRAINT gifFrameData_PK PRIMARY KEY (idGifFrameData)

	,CONSTRAINT gifFrameData_frameData_FK FOREIGN KEY (idFrameData) REFERENCES frameData(idFrameData)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: nationalityPlayer
#------------------------------------------------------------

CREATE TABLE nationalityPlayer(
        idNationality   Int  Auto_increment  NOT NULL ,
        nameNationality Varchar (40) NOT NULL
	,CONSTRAINT nationalityPlayer_PK PRIMARY KEY (idNationality)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: topPlayers
#------------------------------------------------------------

CREATE TABLE topPlayers(
        idTopPlayers       Int  Auto_increment  NOT NULL ,
        pseudoPlayer       Varchar (50) NOT NULL ,
        photoTopPlayerPath Varchar (120) NOT NULL ,
        photoTopPlayerName Varchar (50) NOT NULL ,
        idCharacters       Int NOT NULL ,
        idNationality      Int NOT NULL
	,CONSTRAINT topPlayers_PK PRIMARY KEY (idTopPlayers)

	,CONSTRAINT topPlayers_characters_FK FOREIGN KEY (idCharacters) REFERENCES characters(idCharacters)
	,CONSTRAINT topPlayers_nationalityPlayer0_FK FOREIGN KEY (idNationality) REFERENCES nationalityPlayer(idNationality)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comment
#------------------------------------------------------------

CREATE TABLE comment(
        idComment      Int  Auto_increment  NOT NULL ,
        titleComment   Varchar (50) NOT NULL ,
        commentContent Text NOT NULL ,
        idUser         Int NOT NULL
	,CONSTRAINT comment_PK PRIMARY KEY (idComment)

	,CONSTRAINT comment_6d5ghg_Users_FK FOREIGN KEY (idUser) REFERENCES 6d5ghg_Users(idUser)
)ENGINE=InnoDB;

