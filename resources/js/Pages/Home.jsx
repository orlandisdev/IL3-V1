import React from "react";
import { createRoot } from "react-dom/client";

export default function Home(){
    return <div>Contenido generado desde React!</div>;
};
    
if(document.getElementById('hello-react')){
    createRoot(document.getElementById("hello-react")).render(<Home />);    
}