import React from 'react';
<<<<<<< HEAD
import ReactDOM from 'react-dom/client';
=======
import ReactDOM from 'react-dom';
>>>>>>> 112d54332b9e9998f49eb280f1b4a26a1801bafc

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
<<<<<<< HEAD
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
=======
    ReactDOM.render(<Example />, document.getElementById('example'));
>>>>>>> 112d54332b9e9998f49eb280f1b4a26a1801bafc
}
