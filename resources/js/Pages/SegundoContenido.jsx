import React from "react";
import { createRoot } from "react-dom/client";

export default function SegundoContenido(){
    return <span>Segundo contenido generado desde React!</span>;
};
    
if(document.getElementById('segundo-contenido-react')){
    createRoot(document.getElementById("segundo-contenido-react")).render(<SegundoContenido />);    
}
