function errorHandler(errorMessage, url, lineNumber) {
    alert("ERROR: " + errorMessage + "\n" + "URL: " + url + ":" + lineNumber);
    return true;
}

// https://stackoverflow.com/questions/1960473/get-all-unique-values-in-a-javascript-array-remove-duplicates
function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
}

function formatLanguageName(language) {

    var output = "";

    switch (language) {
        case "bash":
            output = "Bash";
            break;
        case "javascript":
            output = "JavaScript";
            break;
        case "csharp":
            output = "C#";
            break;
        case "java":
            output = "Java";
            break;
        default:
            output = language.toUpperCase();
    }

    return output;

}