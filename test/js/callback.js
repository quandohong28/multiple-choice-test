// const myFunction =  (callback) => {
//     callback();
// }

// myFunction(() => {
//     console.log('hello');
// });


// const callback = () => {
//     console.log('hello');
// }

// const myFunction = (callback) => {
//     callback();
// }


// setTimeout(myFunction, 1000);

const pmFunction = async () => {
    return new Promise((resolve, reject) => {
        let flag = true;
        if(flag) {
            setTimeout(() => {
                resolve('hello'); // tuong ung voi tu khoa return
            }, 1000);
        }
        else {
            reject('lỗi');
        }
    });
}


// chainning
// pm
// .then((log1) => {
//     return (log1 + ' world');
// })
// .then((log2) => {
//     return (log2 + ' 123');
// })
// .then((log3) => {
//     console.log(log3);
// })
// .catch((err) => {
//     console.error(err);
// });

const myFunction = async () => {
    try {
        const result = await pmFunction();
        console.log(result);
    }
    catch(err) {
        console.error(err);
    }
};

myFunction();





