"use strict";
// numberOfInputs is the required number of radio button groups.
function validateForm(questionIdList) {	
	let allGood = true;
	// loop through all question id's.
	for (let i = 0; i < questionIdList.length; i++) {
		const id = questionIdList[i];
		const result = validateQuestion(id);
		if (!result) {
			allGood = false;
			document.getElementById(id + "invalid").textContent = "* Please select the best answer.";
		} else {
			document.getElementById(id + "invalid").textContent = "";
		}
	}
	return allGood;
}

function validateQuestion(questionId) {
	// get the radio buttons where name=questionId.
	// verify that one is checked.
	let oneIsChecked = false;
	const radios = document.getElementsByName( questionId );
    for(let i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            oneIsChecked = true;
        }
    }
	return oneIsChecked;
}