import React, { useEffect, useState } from "react";
import { createRoot } from "react-dom/client";
import axios from "axios";

export default function Permisos(){
    const [permisos, setPermisos] = useState([]);
    async function getPermisos() {
        await axios.get(gVariables.www + '/api/permisos')
            .then(response => {
                //console.log(response.data.permisos);
                setPermisos( response.data.permisos );
            })
        ;
    }
    useEffect(() => {
        getPermisos();
    }, []);
    return (
        <table border="1" cellPadding="3" cellSpacing="0">
            <thead>
                <tr>
                    <th colSpan="2">Roles</th>
                    <th colSpan="2">Permisos</th>
                </tr>
            </thead>
            <tbody>
                {permisos.map((permiso, index) => {
                    return (<tr>
                        <td>{index}º</td>
                        <td>{permiso.dsrol}</td>
                        <td>{permiso.idpermiso}</td>
                        <td>{permiso.dspermiso}</td>
                    </tr>);
                })}
            </tbody>
        </table>
    );
};
    
if(document.getElementById('roles-react')){
    createRoot(document.getElementById("roles-react")).render(<Permisos />);
}
