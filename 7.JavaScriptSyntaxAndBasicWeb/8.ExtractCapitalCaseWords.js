function printCapitalCaseWords(textArr) {
    let upperCaseWords = [];
    for(let textLine of textArr){
        let currWords = textLine.split(/[^A-Za-z]/).filter(x => x != '');
        for(let word of currWords){
            if(word == word.toUpperCase()){
                upperCaseWords.push(word);
            }
        }
    }
    console.log(upperCaseWords.join(", "));
}

function printCapitalCaseWords2(args) {
    let upperCaseWords = args
        .join(' ')
        .split(/\W+/)
        .filter(w=>w.length>0)
        .filter(w=>w === w.toUpperCase());

    console.log(upperCaseWords.join(', '));
}

let inputText = ['We start by HTML, CSS, JavaScript, JSON and REST.',
    'Later we touch some PHP, MySQL and SQL.',
    'Later we play with C#, EF, SQL Server and ASP.NET MVC.',
    'Finally, we touch some Java, Hibernate and Spring.MVC.'];
printCapitalCaseWords2(inputText)