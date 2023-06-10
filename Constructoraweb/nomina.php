<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleNomina.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="icon" href="assets/iconNomina.svg" />
    <title>Dakeva - Nomina</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bx-money-withdraw'></i>
			<span class="text">Dakeva - Nómina</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#" id="inicio">
					<i class='bx bxs-widget' ></i>
					<span class="text">Panel de incio</span>
				</a>
			</li>
			<li>
				<a href="#" id="empleado">
					<i class='bx bxs-group'></i>
					<span class="text">Empleados</span>
				</a>
			</li>
			<li>
				<a href="#" id="nomina">
					<i class='bx bx-money'></i>
					<span class="text">Nómina</span>
				</a>
			</li>
			<li>
				<a href="#" id="novedades">
					<i class='bx bxs-news' ></i>
					<span class="text">Novedades</span>
				</a>
			</li>
			<li>
				<a href="#" id="liquidacion">
					<i class='bx bx-transfer-alt'></i>
					<span class="text">Liquidación</span>
				</a>
			</li>
			<li>
				<a href="#" id="seguridad">
					<i class='bx bxs-detail' ></i>
					<span class="text">Seguridad social y caja de compensación</span>
				</a>
			</li>
            <li>
				<a href="#" id="contratos">
					<i class='bx bxs-id-card' ></i>
					<span class="text">Contratos y cargos</span>
				</a>
			</li>
			<li>
				<a href="#" id="reportes">
					<i class='bx bxs-report'></i>
					<span class="text">Reportes</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="index.html" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#" hidden>
				<div class="form-input" >
					<input type="search" placeholder="Search..." >
					<button type="submit" class="search-btn" ><i class='bx bx-search' hidden></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="dashboard-container">
				<div class="head-title">
					<div class="left">
						<h1>Panel de inicio</h1>
						<ul class="breadcrumb">
						</ul>
					</div>
				</div>
			
				<ul class="box-info">
					<li>
						<i class='bx bxs-calendar-check'></i>
						<span class="text">
							<h3 id="fecha"></h3>
							<p>Fecha actual</p>
						</span>
					</li>
					<li>
						<i class='bx bxs-group'></i>
						<span class="text">
							<h3><?php include 'cantidadEmpleados.php'?></h3>
							<p>Empleados</p>
						</span>
					</li>
				</ul>
			
			
				<div class="table-data">
					<div class="todo">
                        <div class="head">
                            <h3>Actividades por hacer</h3>
                        </div>
                        <ul class="todo-list" id="todo-list">
                            <li class="completed">
                                <p>Descargar reporte de nómina del mes</p>
                            </li>
                            <li class="completed">
                                <p>Revisar nómina, actualizar y generar</p>
                            </li>
                        <!-- Los nuevos elementos <li> se generarán aquí -->
                        </ul>
                    </div>
				</div>
			</div>

			<div class="empleados-container">
				<div class="head-title">
					<div class="left">
						<h1>Empleados</h1>
					</div>
				</div>			
			
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Historial de empleados</h3>
							<i class='bx bxs-user-plus' style='color:#dba359' id="add-user" onclick="mostrarFormularioEmpleado()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Acción</th>
									<th>Nombre completo</th>
									<th>Salario Integral</th>
									<th>Fecha de ingreso</th>
									<th>Fecha de vigencia</th>
									<th>EPS</th>
									<th>ARL</th>
									<th>Pensión</th>
									<th>Cargo</th>
									<th>Tipo de contrato</th>
									<th>Caja de compensación</th>
								</tr>
							</thead>
							<tbody>
								<?php include 'listaEmpleado.php'; ?>
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioEmpleado">
                            <div class="formulario-container" id="formularioEmpleadoContainer">
                                <button class="close-button" id="close-button-empleado">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarEmpleado.php" method="POST" class="formulario-add" id="formularioRegistroEmpleado">
                                    <h2 class="create-account">Registra un empleado</h2>
                                    <p class="cuenta-gratis">Ingresa los datos del empleado</p>
                                    <input type="text" name="primerNombre" placeholder="Primer nombre" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                        required title="Por favor, ingresa solo letras, números y espacios">
									<input type="text" name="segundoNombre" placeholder="Segundo nombre" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                         title="Por favor, ingresa solo letras, números y espacios">
									<input type="text" name="primerApellido" placeholder="Primer apellido" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                        required title="Por favor, ingresa solo letras, números y espacios">
									<input type="text" name="segundoApellido" placeholder="Segundo apellido" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                         title="Por favor, ingresa solo letras, números y espacios">
                                    <label for="salarioIntegral">¿Tiene salario integral?</label>
										<select id="opciones" name="salarioIntegral" required>
											<option value="">-- Selecciona una opción --</option>
											<option value="S">Si</option>
											<option value="N">No</option>
										</select>
									<label for="fechaIngreso">Fecha de ingreso</label>
									<input type="date" id="fechaIngreso" name="fechaIngreso" required>
									<label for="fechaVigencia">Fecha de vigencia</label>
									<input type="date" id="fechaVigencia" name="fechaVigencia">
									<label for="eps">EPS</label>
										<select id="opciones" name="eps" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerEps.php';?>
											
										</select>
									<label for="arl">ARL</label>
										<select id="opciones" name="arl" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerArl.php';?>
											
										</select>
									<label for="pension">Pension</label>
										<select id="opciones" name="pension" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerPension.php';?>
											
										</select>
									<label for="cargo">Cargo</label>
										<select id="opciones" name="cargo" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerCargo.php';?>
											
										</select>
									<label for="tipoContrato">Tipo de contrato</label>
										<select id="opciones" name="tipoContrato" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerTipoContrato.php';?>
											
										</select>
									<label for="cajaCompensacion">Caja de compensación</label>
										<select id="opciones" name="cajaCompensacion">
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerCajaCompensacion.php';?>
											
										</select>
                                    <input type="submit" value="Registrar empleado" id="registrar-empleado">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE MODIFICACIÓN-->
                        <div class="formulario-background" id="modificarEmpleado">
                            <div class="formulario-container" id="modificarEmpleadoContainer">
                                <button class="close-button" id="close-button-modificar-empleado">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                 <form action="actualizarEmpleado.php" method="POST" class="formulario-add" id="formularioModificarEmpleado">
                                    <h2 class="create-account">Modifica un empleado</h2>
                                    <p class="cuenta-gratis">Modifica los datos del empleado</p>
                                    <input type="text" name="primerNombre" placeholder="Primer nombre" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                        required title="Por favor, ingresa solo letras, números y espacios">
									<input type="text" name="segundoNombre" placeholder="Segundo nombre" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                         title="Por favor, ingresa solo letras, números y espacios">
									<input type="text" name="primerApellido" placeholder="Primer apellido" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                        required title="Por favor, ingresa solo letras, números y espacios">
									<input type="text" name="segundoApellido" placeholder="Segundo apellido" pattern="[A-Za-z0-9ñÑ\s]{1,30}"
                                         title="Por favor, ingresa solo letras, números y espacios">
                                    <label for="salarioIntegral">¿Tiene salario integral?</label>
										<select id="opciones" name="salarioIntegral" required>
											<option value="">-- Selecciona una opción --</option>
											<option value="Si">Si</option>
											<option value="No">No</option>
										</select>
									<label for="fechaIngreso">Fecha de ingreso</label>
									<input type="date" id="fechaIngreso" name="fechaIngreso" required>
									<label for="fechaVigencia">Fecha de vigencia</label>
									<input type="date" id="fechaVigencia" name="fechaVigencia" required>
									<label for="eps">EPS</label>
										<select id="opciones" name="eps" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerEps.php';?>
										</select>
									<label for="arl">ARL</label>
										<select id="opciones" name="arl" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerArl.php';?>
										</select>
									<label for="pension">Pension</label>
										<select id="opciones" name="pension" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerPension.php';?>
										</select>
									<label for="cargo">Cargo</label>
										<select id="opciones" name="cargo" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerCargo.php';?>
										</select>
									<label for="tipoContrato">Tipo de contrato</label>
										<select id="opciones" name="tipoContrato" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerTipoContrato.php';?>
										</select>
									<label for="cajaCompensacion">Caja de compensación</label>
										<select id="opciones" name="cajaCompensacion">
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerCajaCompensacion.php';?>
										</select>
                                    <input type="submit" value="Modificar empleado" id="modificar-empleado">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE ELIMINACIÓN-->
                        <div class="formulario-background" id="eliminarEmpleado">
                            <div class="formulario-container" id="eliminarEmpleadoContainer">
                                <button class="close-button" id="close-button-eliminar-empleado">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="eliminarEmpleado.php" method="POST" class="formulario-add" id="formularioEliminarEmpleado">
                                    <h2 class="create-account">Elimina un Empleado</h2>
                                    <p class="cuenta-gratis">¿Estás seguro que deseas eliminar el empleado?</p>
                                    <input type="submit" value="Eliminar empleado" id="eliminar-empleado">
                                </form>
                            </div>
                        </div>
					</div>
					
				</div>
			</div>

			<div class="nomina-container">
				<div class="head-title">
					<div class="left">
						<h1>Nómina</h1>
						<ul class="breadcrumb">
						</ul>
					</div>
				</div>	
				
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Historial</h3>
						</div>
						<table>
							<thead>
									<th>Mes</th>
									<th>Total</th>
									<th>Ver</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<p><?php echo date('F'); ?></p>
									</td>
									<td>
									<?php include 'obtenerTotalNomina.php'; ?>
									</td>
									<td>
										<button style="border: none; background-color: transparent;"> <i class='bx bxs-file-find' id="verDetalle"></i> </button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

					<div class="table-data" id="DetalleNomina" style="display: none;">
						<div class="order">
							<div class="head">
								<h3>Historial de nómina</h3>
							</div>
							<table>
								<thead>
									<tr>
										<th>ID empleado</th>
										<th>Nombre completo</th>
										<th>Transporte</th>
										<th>Sueldo total</th>
									</tr>
								</thead>
								<tbody>
									<?php include_once 'mostrarDetalleNomina.php';?>
								</tbody>
							</table>
						</div>
					</div>
			</div>

			<div class="novedades-container">
				<div class="head-title">
					<div class="left">
						<h1>Novedades de los empleados</h1>
						<ul class="breadcrumb">
						</ul>
					</div>
				</div>			
			
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Historial de novedades</h3>
							<i class='bx bx-plus-circle' style='color:#dba359' onclick="mostrarFormularioNovedad()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Acción</th>
									<th>Nombre completo</th>
									<th>Tipo de novedad</th>
									<th>Cantidad</th>
									<th>Fecha de inicio</th>
									<th>Fecha fin</th>
								</tr>
							</thead>
							<tbody>
								<?php include_once 'listaNovedades.php'; ?>
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioNovedad">
                            <div class="formulario-container" id="formularioNovedadContainer">
                                <button class="close-button" id="close-button-novedad">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarNovedad.php" method="POST" class="formulario-add" id="formularioRegistroNovedad">
                                    <h2 class="create-account">Registra una novedad por empleado</h2>
                                    <p class="cuenta-gratis">Ingresa los datos de la novedad</p>
                                    <label for="listaEmpleado">Selecciona el empleado</label>
										<select id="opciones" name="listaEmpleado" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerEmpleados.php'; ?>
										</select>
									<label for="tipoNovedad">Tipo de novedad</label>
										<select id="opciones" name="tipoNovedad" onchange="mostrarCampo()" required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerTipoNovedad.php'; ?>
										</select>	
									<input type="text" id="cantidad" name="cantidad" style="display: none;" placeholder="Cantidad de días" pattern="\d{3}" title="Por favor, ingrese únicamente números (Max. 3).">
									<input type="submit" value="Registrar novedad" id="registrar-novedad">
                                </form>
                            </div>
                        </div>
                        <!--FORMULARIO DE MODIFICACIÓN-->
                        <div class="formulario-background" id="modificarNovedad">
                            <div class="formulario-container" id="modificarNovedadContainer">
                                <button class="close-button" id="close-button-modificar-novedad">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
								<form action="modificar-novedad.php" method="POST" class="formulario-add" id="formularioModificarNovedad">
								<h2 class="create-account">Modificar una novedad por empleado</h2>
								<label for="listaEmpleado">Selecciona el empleado</label>
									<select id="opciones" name="listaEmpleado" required>
										<option value="">-- Selecciona una opción --</option>
									</select>
								<label for="tipoNovedad">Tipo de novedad</label>
									<select id="opciones" name="tipoNovedad" onchange="mostrarCampo()" required>
										<option value="">-- Selecciona una opción --</option>
									</select>
								<input type="text" id="cantidad" name="cantidad" style="display: none;" placeholder="Cantidad de días" pattern="\d{3}" title="Por favor, ingrese únicamente números (Max. 3).">
									<select id="opcionesCant" name="tipoNovedad" style="display: none;" required>
										<option value="">-- Selecciona una opción --</option>
										<option value="unidadDias">Días</option>
										<option value="unidadHoras">Horas</option>
									</select>							
								<input type="submit" value="Modificar novedad" id="modificar-novedad">
							</form>
                            </div>
                        </div>
                        <!--FORMULARIO DE ELIMINACIÓN-->
                        <div class="formulario-background" id="eliminarNovedad">
                            <div class="formulario-container" id="eliminarNovedadContainer">
                                <button class="close-button" id="close-button-eliminar-novedad">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form class="formulario-add" id="formularioEliminarEmpleado">
                                    <h2 class="create-account">Elimina una novedad</h2>
                                    <p class="cuenta-gratis">¿Estás seguro que deseas eliminar la novedad?</p>
                                    <input type="submit" value="Eliminar novedad" id="eliminar-novedad">
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>

			<div class="liquidacion-container">
				<div class="head-title">
					<div class="left">
						<h1>Liquidación</h1>
						<ul class="breadcrumb">
						</ul>
					</div>
				</div>
				
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Historial</h3>
						</div>
						<table>
							<thead>
									<th>Mes</th>
									<th>Salud</th>
									<th>Pension</th>
									<th>Cesantías</th>
									<th>Interés cesantías</th>
									<th>Prima</th>
									<th>Vacaciones</th>
									<th>Total</th>
									<th>Ver</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<p><?php echo date('F'); ?></p>
									</td>
									<td>
										<?php include_once 'mostrarTotalSalud.php'; ?>
									</td>
									<td>
										<?php include_once 'mostrarTotalPension.php'; ?>
									</td>
									<td>
										<?php include_once 'mostrarTotalCesantias.php'; ?>
									</td>
									<td>
										<?php include_once 'mostrarTotalInteres.php'; ?>
									</td>
									<td>
										<?php include_once 'mostrarTotalPrima.php'; ?>
									</td>
									<td>
										<?php include_once 'mostrarTotalVacaciones.php'; ?>
									</td>
									<td>
										<?php include_once 'mostrarTotalLiquidacion.php'; ?>
									</td>
									<td>
										<button style="border: none; background-color: transparent;"><i class='bx bxs-file-find' id="verDetalleLiquidacion"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			
				<div id="DetalleLiquidacion" class="table-data" style="display: none;">
				<div class="order">
						<div class="head">
							<h3>Detalle de liquidación</h3>
						</div>
						<table>
							<thead>
								<tr>
									<th>ID empleado</th>
									<th>Nombre completo</th>
									<th>Salud</th>
									<th>Pension</th>
									<th>Cesantias</th>
									<th>Interes cesantias</th>
									<th>Prima</th>
									<th>Vacaciones</th>
									<th>Total liquidado</th>
								</tr>
							</thead>
							<tbody>
							<?php include_once 'mostrarDetalleLiquidacion.php';?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="seguridad-container">
				<div class="head-title">
					<div class="left">
						<h1>Seguridad social y caja de compensación</h1>
						<ul class="breadcrumb">
						</ul>
					</div>
				</div>			
			
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>ARL</h3>
							<i class='bx bx-plus-circle' style='color:#dba359' onclick="mostrarFormularioArl()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Nombre</th>
								</tr>
							</thead>
							<tbody>
								<?php include_once 'listaArl.php'; ?>
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioArl">
                            <div class="formulario-container" id="formularioArlContainer">
                                <button class="close-button" id="close-button-arl">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarArl.php" method="POST" class="formulario-add" id="formularioRegistroArl">
                                    <h2 class="create-account">Registra una ARL</h2>
                                    <input type="text" name="arl" placeholder="Nombre ARL" pattern="[A-ZÑ]+" required title="Por favor, ingresa solo letras mayúsculas de la A-Z">
                                    <input type="submit" value="Registrar ARL" id="registrar-arl">
                                </form>
                            </div>
                        </div>
					</div>
				</div>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>EPS</h3>
							<i class='bx bx-plus-circle' style='color:#dba359' onclick="mostrarFormularioEps()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Nombre</th>
								</tr>
							</thead>
							<tbody>
								<?php include_once 'listaEps.php'; ?>
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioEps">
                            <div class="formulario-container" id="formularioEpsContainer">
                                <button class="close-button" id="close-button-eps">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarEps.php" method="POST" class="formulario-add" id="formularioRegistroEps">
                                    <h2 class="create-account">Registra una EPS</h2>
                                    <input type="text" name="eps" placeholder="Nombre EPS" pattern="[A-ZÑ]+" required title="Por favor, ingresa solo letras mayúsculas de la A-Z">
                                    <input type="submit" value="Registrar EPS" id="registrar-eps">
                                </form>
                            </div>
                        </div>
					</div>
				</div>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Pension</h3>
							<i class='bx bx-plus-circle' style='color:#dba359' onclick="mostrarFormularioPension()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Nombre</th>
								</tr>
							</thead>
							<tbody>
								<?php include_once 'listaPension.php'; ?>	
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioPension">
                            <div class="formulario-container" id="formularioPensionContainer">
                                <button class="close-button" id="close-button-pension">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarPension.php" method="POST" class="formulario-add" id="formularioRegistroPension">
                                    <h2 class="create-account">Registra una empresa de pensión</h2>
                                    <input type="text" name="pension" placeholder="Nombre empresa" pattern="[A-ZÑ]+" required title="Por favor, ingresa solo letras mayúsculas de la A-Z">
                                    <input type="submit" value="Registrar empresa" id="registrar-pension">
                                </form>
                            </div>
                        </div>
					</div>
				</div>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Caja de compensación</h3>
							<i class='bx bx-plus-circle' style='color:#dba359' onclick="mostrarFormularioCJ()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Nombre</th>
								</tr>
							</thead>
							<tbody>
								<?php include_once 'listaCajaCompensacion.php'; ?>	
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioCJ">
                            <div class="formulario-container" id="formularioCJContainer">
                                <button class="close-button" id="close-button-CJ">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarCajaCompensacion.php" method="POST" class="formulario-add" id="formularioRegistroCJ">
                                    <h2 class="create-account">Registra una caja de compensación</h2>
                                    <input type="text" name="cajaCompensacion" placeholder="Nombre empresa" pattern="[A-ZÑ]+" required title="Por favor, ingresa solo letras mayúsculas de la A-Z">
                                    <input type="submit" value="Registrar caja" id="registrar-caja">
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>

			<div class="contratos-container">
				<div class="head-title">
					<div class="left">
						<h1>Contratos y cargos</h1>
						<ul class="breadcrumb">
						</ul>
					</div>
				</div>			
			
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Contratos</h3>
							<i class='bx bx-plus-circle' style='color:#dba359' onclick="mostrarFormularioContrato()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Tipo de contrato</th>
								</tr>
							</thead>
							<tbody>
								<?php include_once 'listaTipoContrato.php';?>
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioContrato">
                            <div class="formulario-container" id="formularioContratoContainer">
                                <button class="close-button" id="close-button-contrato">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarTipoContrato.php" method="POST" class="formulario-add" id="formularioRegistroContrato">
                                    <h2 class="create-account">Registra tipo de contrato</h2>
									<input type="text" name="tipoContrato" placeholder="Tipo de contrato" pattern="[A-ZÑ]+" required title="Por favor, ingresa solo letras mayúsculas de la A-Z">
									<input type="submit" value="Registra tipo de contrato" id="registra-contrato">
								</form>
                            </div>
                        </div>
					</div>
				</div>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Cargos</h3>
							<i class='bx bx-plus-circle' style='color:#dba359' onclick="mostrarFormularioCargo()"></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Cargo</th>
									<th>Dependencia</th>
									<th>Salario Base</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<?php include_once 'listaCargo.php';?>
								</tr>
							</tbody>
						</table>
						<!--FORMULARIO DE REGISTRO-->
                        <div class="formulario-background" id="formularioCargo">
                            <div class="formulario-container" id="formularioCargoContainer">
                                <button class="close-button" id="close-button-cargo">
                                    <i class='bx bx-x-circle' style="color: white"></i>
                                </button>
                                <form action="registrarCargo.php" method="POST" class="formulario-add" id="formularioRegistroCargo">
                                    <h2 class="create-account">Registra un cargo</h2>
									<input type="text" name="cargo" placeholder="Nombre de cargo" pattern="[A-Za-z\s]{1,30}"
									required title="Por favor, ingresa solo letras y espacios">                                    
									<label for="dependencia">Seleccione la dependencia</label>
										<select id="opciones" name="dependencias"  required>
											<option value="">-- Selecciona una opción --</option>
											<?php include_once 'obtenerDependencias.php';?>
									</select>
									<input type="text" name="salario-base" placeholder="Salario base" pattern="\d{1,10}" title="Por favor, ingresa un número de máximo 10 cifras" required>
									<input type="submit" value="Registra cargo" id="registra-cargo">
								</form>
                            </div>
                        </div>
					</div>
				</div>
			</div>

			<div class="reportes-container">
				<div class="head-title">
					<div class="left">
						<h1>Reportes</h1>
						<ul class="breadcrumb">
						</ul>
					</div>
				</div>			
			
				<div class="reportes-content">
					<div class="reportes-content-container">
					<form id="myForm" method="POST">
						<label for="tipoReporte">Tipo de reporte: </label>
						<select id="opcionesReporte" name="tipoReporte" required>
							<option value="">-- Selecciona una opción --</option>
							<option value="novedades">Reporte de novedades</option>
							<option value="liquidaciones">Reporte de nómina</option>
							<option value="empleadosActivos">Reporte de empleados</option>
							<option value="empleadosInactivos">Reporte de empleados inactivos</option>
						</select>
						<label for="fechaInicioReporte" id="labelFechaInicio" style="display: none;">Fecha inicial: </label>
						<input type="date" id="fechaInicioReporte" name="fechaInicioReporte" hidden>
						<label for="fechaFinalReporte" id="labelFechaFinal" style="display: none;">Fecha final: </label>
						<input type="date" id="fechaFinalReporte" name="fechaFinalReporte" hidden>
						<input type="submit" value="Generar Excel" id="generar-reporte">
					</form>
					</div>
				</div>
			</div>
			</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="js/nomina.js"></script>
	<script src="js/recordatorio.js"></script>
	<script src="js/empleados.js"></script>
	<script src="js/novedad.js"></script>
	<script src="js/arl.js"></script>
	<script src="js/eps.js"></script>
	<script src="js/pension.js"></script>
	<script src="js/cajacompensacion.js"></script>
	<script src="js/contrato.js"></script>
	<script src="js/cargo.js"></script>
	<script src="js/reportes.js"></script>
</body>
</html>