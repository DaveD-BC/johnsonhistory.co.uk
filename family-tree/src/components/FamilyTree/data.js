"use strict";
var __assign = (this && this.__assign) || function () {
    __assign = Object.assign || function(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
                t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
exports.__esModule = true;
console.log("===============================");
var data = [
    {
        id: 1.1,
        name: "Pam Pateman",
        spouse: undefined,
        father: undefined,
        mother: undefined
    },
    {
        id: 1,
        name: "Mum Dawson",
        spouse: undefined,
        father: undefined,
        mother: undefined
    },
    {
        id: 2,
        name: "Dave Dawson",
        spouse: 3,
        father: undefined,
        mother: 1
    },
    {
        id: 3,
        name: "Mash Dawson",
        spouse: 1,
        father: undefined,
        mother: undefined
    },
    {
        id: 4,
        name: "Oliver Dawson",
        spouse: undefined,
        father: 2,
        mother: 3
    },
    {
        id: 5,
        name: "William Dawson",
        spouse: undefined,
        father: 2,
        mother: 3
    },
    {
        id: 6,
        name: "Amelia Dawson",
        spouse: undefined,
        father: 2,
        mother: 3
    },
];
var findTop = function (data) {
    return data.filter(function (person) { return !person.father && !person.mother; });
};
var top = findTop(data);
var getChildren = function (data) { return function (person) {
    var id = person.id;
    return data.filter(function (person) {
        return (person.father && person.father === id) ||
            (person.mother && person.mother === id);
    });
}; };
var tree = top.map(function (person) { return (__assign(__assign({}, person), { children: getChildren(data)(person) })); });
console.log(tree);
