console.log("===============================");

export interface Person {
  id: number;
  name: string;
  spouse?: number;
  father?: number;
  mother?: number;
}

const data: Person[] = [
  {
    id: 1.1,
    name: "Pam Pateman",
    spouse: undefined,
    father: undefined,
    mother: undefined,
  },
  {
    id: 1,
    name: "Mum Dawson",
    spouse: undefined,
    father: undefined,
    mother: undefined,
  },
  {
    id: 2,
    name: "Dave Dawson",
    spouse: 3,
    father: undefined,
    mother: 1,
  },
  {
    id: 3,
    name: "Mash Dawson",
    spouse: 1,
    father: undefined,
    mother: undefined,
  },
  {
    id: 4,
    name: "Oliver Dawson",
    spouse: undefined,
    father: 2,
    mother: 3,
  },
  {
    id: 5,
    name: "William Dawson",
    spouse: undefined,
    father: 2,
    mother: 3,
  },
  {
    id: 6,
    name: "Amelia Dawson",
    spouse: undefined,
    father: 2,
    mother: 3,
  },
];

const findTop = (data: Person[]) =>
  data.filter((person) => !person.father && !person.mother);

const top = findTop(data);

const getChildren = (data: Person[]) => (person: Person) => {
  const id = person.id;
  return data.filter(
    (person) =>
      (person.father && person.father === id) ||
      (person.mother && person.mother === id)
  );
};

const tree = top.map((person) => ({
  ...person,
  children: getChildren(data)(person),
}));

console.log(tree);
