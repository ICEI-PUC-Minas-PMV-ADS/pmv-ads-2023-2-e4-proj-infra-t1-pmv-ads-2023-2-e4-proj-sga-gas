const axios = require('axios').default;

async function getData() {
    return axios({
        method: 'get',
        url: 'http://localhost:3000/orders',
    })
}

test('retrieving data', () => {
    return getData().then(data => {
        expect(() => data.toThrow('errconnect'));
        expect(data.data.length).toBeGreaterThan(1);
        expect(data).toBeDefined();
        expect(data).not.toBeUndefined()
    });
}); 

async function getData2() {
    return axios({
        method: 'get',
        url: 'http://localhost:3000/products',
    })
}

test('retrieving data 2', () => {
    return getData2().then(data => {
        expect(() => data.toThrow('errconnect'));
        expect(data.data.length).toBeGreaterThan(1);
        expect(data).toBeDefined();
        expect(data).not.toBeUndefined()
    });
}); 
