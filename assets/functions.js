/**
 * @param {String} errorMessage e.g. "Uncaught ReferenceError: b is not defined"
 * @param {String} url e.g. "http://localhost/"
 * @param {Number} lineNumber e.g. 33
 *
 * @returns {boolean}
 */
function errorHandler(errorMessage, url, lineNumber) {

    var bodyElement = document.getElementsByTagName("body")[0];

    // https://clubmate.fi/append-and-prepend-elements-with-pure-javascript/
    var errorBox = document.createElement("div");
    errorBox.innerHTML = "ERROR: " + errorMessage + "\n" + "URL: " + url + ":" + lineNumber;
    bodyElement.insertBefore(errorBox, bodyElement.firstChild);

    return true;

}

// https://stackoverflow.com/questions/1960473/get-all-unique-values-in-a-javascript-array-remove-duplicates
function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
}

function formatLanguage(language) {

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

function formatMethod(method) {

    return method.toUpperCase();

}
