import React from "react";

interface Person {
    id: number;
    name: string;
    spouce?: number;
    father?: number;
    mother?: number;
  }
  
  const data: Person[] = [{
      id: 1,
      name: "Mum Dawson",
      spouce: undefined,
      father: undefined,
      mother: undefined,
    },
    {
      id: 2,
      name: "Dave Dawson",
      spouce: 2,
      father: undefined,
      mother: undefined,
    },
    {
      id: 3,
      name: "Mash Dawson",
      spouce: 1,
      father: undefined,
      mother: undefined,
    },
    {
      id: 4,
      name: "Oliver Dawson",
      spouce: undefined,
      father: 1,
      mother: 2,
    },
    {
      id: 5,
      name: "William Dawson",
      spouce: undefined,
      father: 1,
      mother: 2,
    },
    {
      id: 6,
      name: "Amelia Dawson",
      spouce: undefined,
      father: 1,
      mother: 2,
    },
  ];
  
  const findTop = (data: Person[]) => data.find((person) => !person.father && !person.mother);
  
  console.log(findTop(data));
  
const FamilyTree: React.FC = () => {
  return <></>;
};
