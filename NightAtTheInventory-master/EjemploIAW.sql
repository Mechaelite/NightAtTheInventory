Create Table MagicWeapons (
	MaWeaponID int identity(1,1) not null Primary Key, --ID
	MaWeaponName NVARCHAR(50) Not Null, --ITEMName. Textbox
	MaWeaponLevel Int Not Null, --Levels 1 to 100.
	MaWeaponClass NVARCHAR(100), --Weapon class, bow and pistol are both ranged for example
	MaWeaponDescription NVARCHAR (1500) Not Null, --Self Explanatory. Textbox
	MaWeaponPrice int --Self Explanatory
)
GO

Alter Table MagicWeapons
ADD Constraint CK_MagicLevel Check (MaWeaponLevel between 1 and 100)
GO

Alter Table MagicWeapons
ADD Constraint CK_MagicClass Check (MaWeaponClass in ('Fire', 'Earth', 'Water', 'Wind', 'Light', 'Darkness',
'Arcane', 'Frost', 'Death', 'Life', 'Void', 'Wild'))
GO


Create Table MeleeWeapons (
	MeWeaponID int identity(1,1) not null Primary Key, --ID
	MeWeaponName NVARCHAR(50) Not Null, --ITEMName. Textbox
	MeWeaponLevel Int Not Null, --Levels 1 to 100.
	MeWeaponClass NVARCHAR(100), --Weapon class, bow and pistol are both ranged for example
	MeWeaponDescription NVARCHAR (1500) Not Null, --Self Explanatory. Textbox
	MeWeaponPrice int --Self Explanatory
)
GO

Alter Table MeleeWeapons
ADD Constraint CK_MeleeLevel Check (MeWeaponLevel between 1 and 100)
GO

Alter Table MeleeWeapons
ADD Constraint CK_MeleeClass Check (MeWeaponClass in ('Sword', 'Dagger', 'Hammer', 'Axe', 'Spear', 'Gauntlet',
'Flail', 'Halberd'))
GO

Create Table RangedWeapons (
	RWeaponID int identity(1,1) not null Primary Key, --ID
	RWeaponName NVARCHAR(50) Not Null, --ITEMName. Textbox
	RWeaponLevel Int Not Null, --Levels 1 to 100.
	RWeaponClass NVARCHAR(100), --Weapon class, bow and pistol are both ranged for example
	RWeaponDescription NVARCHAR (1500) Not Null, --Self Explanatory. Textbox
	RWeaponPrice int --Self Explanatory
)
GO

Alter Table RangedWeapons
ADD Constraint CK_RangedLevel Check (RWeaponLevel between 1 and 100)
GO

Alter Table RangedWeapons
ADD Constraint CK_RangedClass Check (RWeaponClass in ('Bow', 'Crossbow', 'Sling', 'Thrown Weapons', 'Bomb',
'Firearms', 'Blowgun'))
GO


Create Table Armor (
	ArmorID int identity(1,1) not null Primary Key, --ID
	ArmorName NVARCHAR(50) Not Null, --ITEMName. Textbox
	ArmorLevel Int Not Null, --Levels 1 to 100.
	ArmorDescription NVARCHAR (1500) Not Null, --Self Explanatory. Textbox
	ArmorType NVARCHAR(50), --Light, Medium, Heavy
	ArmorPrice int --Self Explanatory
)
GO

Alter Table Armor
ADD Constraint CK_ArmorLevel Check (ArmorLevel between 1 and 100)
GO

Alter Table Armor
ADD Constraint CK_ArmorType Check (ArmorType in ('Light', 'Medium', 'Heavy'))
GO

Create Table Misc (
	ItemID int identity(1,1) not null Primary Key, --ID
	ItemName NVARCHAR(50) Not Null, --ITEMName. Textbox
	ItemClass NVARCHAR(100), --Stat modifier, Food, Ammo.
	ItemDescription NVARCHAR (1500) Not Null, --Self Explanatory. Textbox
	ItemPrice int, --Self Explanatory
	ItemStock int --Ammount of items in the bag.
)
GO

Alter Table Misc
ADD Constraint CK_MiscClass Check (ItemClass in ('Ammo', 'Consumable', 'Bag', 'Utility', 'Currency', 'Readables', 'Crafting'))
GO



Create Table Characters (
	CharacterID int identity(1,1) not null Primary Key, --ID
	CharacterName NVARCHAR(50) Not Null, --Character Name. Textbox
	CharacterLvl Int Not Null, --Levels 1 to 100. Dropdown
	CharacterClass NVARCHAR(100), --Character type that can use it. Checkbox/Dropdown
	ChracterBackstory NVARCHAR(2000), --Self Explanatory. Textbox
	CharacterGender NVARCHAR(20) Not Null, --Apache ROFLcopter
	CharacterRace NVARCHAR(20) Not Null --Dropdown.
)
GO

Alter Table Characters
ADD Constraint CK_CharLevel Check (CharacterLvl between 1 and 100)
GO

Alter Table Characters
ADD Constraint CK_CharClass Check (CharacterClass in ('Warrior', 'Mague', 'Rogue', 'Warlock', 'Necromancer', 'Psyker',
'Assassin', 'Paladin', 'Priest', 'Monk', 'Dark Paladin', 'Barbarian', 'Knight', 'Berserker', 'Dark Knight', 'Demon Hunter',
'Witch Hunter', 'Druid', 'Shaman', 'Fighter', 'Ninja', 'Samurai', 'Artificier', 'Alchemist', 'Hunter', 'Beastmaster', 'Ranger'))
GO

Alter Table Characters
ADD Constraint CK_CharGender Check (CharacterGender in ('Male', 'Female', 'Undefined'))
GO

Alter Table Characters
ADD Constraint CK_CharRace Check (CharacterRace in ('Human', 'Elf', 'Drow', 'Wood Elf', 'Dwarf', 'Tiefling',
'Orc', 'Goblin', 'Kobold', 'Vampire', 'Werewolf', 'Troll', 'Undead', 'Construct', 'Driade', 'Lizardman', 'Half-Beast',
'Angel', 'Demon'))
GO

Create Table CharacterInventory (
	CItemID int not null foreign key references Misc (ItemID),
	CArmorID int not null foreign key references Armor (ArmorID),
	CMaWeaponID int not null foreign key references MagicWeapons (MaWeaponID),
	CMeWeaponID int not null foreign key references MeleeWeapons (MeWeaponID),
	CRWeaponID int not null foreign key references RangedWeapons (RWeaponID),
	CCharacterID int not null foreign key references Characters (CharacterID)
)
GO

Create Table GM (
	GMID int identity(1,1) not null Primary Key, --ID
	GMName NVARCHAR(50) Not Null, --User Name. Textbox
	GMPassword CHAR(40) Not null --User password
)
GO

Create Table USR (
	USRID int identity(1,1) not null Primary Key, --ID
	USRName NVARCHAR(50) Not Null, --User Name. Textbox
	USRPassword CHAR(40) Not null --User password
)
GO

Create Table Game (
	GameID int identity(1,1) not null Primary Key, --ID
	GameName NVARCHAR(50) Not Null, --Game Name. Textbox
	GGMID int identity(1,1) not null Foreign Key References GM (GMID),
	GUSRID int identity(1,1) not null Foreign Key References USR (USRID)
)
GO

