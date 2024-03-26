import PrimaryButton from '@/Components/PrimaryButton';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';

export default function Dashboard({ auth }) {
    const asset = (path) => {
        return `/storage/images/${path}`;
    }
    const user = (auth) => {
        return auth.name;
    };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Bienvenid@ {user(auth.user)}</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12 ">
                <div className=" sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden">
                        <div className="p-6 text-gray-900 flex flex-col items-center">
                            <img className='w-1/6' src={asset('icono_p.png')} alt="icono de un rosco de pasapalabras" />
                            <h3>Insertar preguntas</h3>
                            <Link className='px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'
                                href={route('partida')}
                            >
                             +
                            </Link>

                        </div>
                        <hr />
                        <div className="p-6 text-gray-900 flex flex-col items-center">
                            <h3>Ir al menú principal</h3>
                            <Link className='px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'
                                href={route('index')}
                            >
                             {'<-'}
                            </Link>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
