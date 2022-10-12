function isBalanced(text) {
    let stack = [];
    
    stack.push();
    stack.pop();

    let size = text.length;

    for (let i = 0; i < size; i++) {
        let letter = text[i];

        if (text[i] === '(') {
            stack.push('(');

        } else if (text[i] === ')') {
            if (stack[0] === '(') {
                stack.pop();

            } else {
                return false;
            }
        }
    }
    return true;
}


let isBalance = isBalanced('(((fsdf(sdfsd(Sdf)))))');

if (isBalance == true) {
    console.log('is balanced');

} else {
    console.log('is not balanced');

}
