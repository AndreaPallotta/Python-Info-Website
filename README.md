# web2project

This holds our project code for the web and mobile 2 class.

## to make sure the DB stuff works right
  - upload this to your url:  ~abc1234/240/FOLDER/
     - example url: ~ztj3686/240/group/groupProject/classes.php

## Quizzes:
  - add your quiz questions/answers to the quizzes.sql file in the root of this project.
     - make sure you add your questions/answers at the end, following the pattern for the classes section.
     - this contains the table creation and data creation instructions
	 - replace the first line with your `use ` your username;
	 - run in php my admin, this will delete the existing data and re-create it.
  - question id's should be in the 600's for section 6, ... so that we don't have
    to worry about any duplicate id's in the DB for the questions.
  - answer id's can be left blank (the auto-increment works here well enough)
  - the quiz process form will work without having to change anything
  - name your quiz page `section-`quiz.php, where section is your section name.
  - see the classes-quiz.php page for an example, the comments should guide you.

