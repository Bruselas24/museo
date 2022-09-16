<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Inscripciones</h3>
                        <p>Complete el formulario para reservar un paseo</p>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Nombre Completo" required>
                               <div class="valid-feedback">El nombre es valido</div>
                               <div class="invalid-feedback">El nombre de usuario no puede estar en blanco</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Mail" required>
                                 <div class="valid-feedback">El mail es valido</div>
                                 <div class="invalid-feedback">El mail no puede estar en blanco</div>
                            </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                      <option selected disabled value="">En que semana queres ir</option>
                                      <option value="1">1 Semana</option>
                                      <option value="2">2 Semana</option>
                                      <option value="3">3 Semana</option>
                                      <option value="4">4 Semana</option>
                               </select>
                                <div class="valid-feedback">Seleccionaste una semana</div>
                                <div class="invalid-feedback">Por favor seleccione una semana!</div>
                           </div>


                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                               <div class="valid-feedback">La contraseña es valida</div>
                               <div class="invalid-feedback">La contraseña no puede estar en blanco!</div>
                           </div>


                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="cantidad">Cantidad de Personas: </label>

                            <input type="radio" class="btn-check" name="cantidad" id="male" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">1</label>

                            <input type="radio" class="btn-check" name="cantidad" id="female" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">2</label>

                            <input type="radio" class="btn-check" name="cantidad" id="secret" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="secret">3</label>
                               <div class="valid-feedback mv-up">Seleccionaste una cantidad</div>
                                <div class="invalid-feedback mv-up">Seleccione cuantos son!</div>
                            </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">Confirmo que la informacion esta correcta</label>
                         <div class="invalid-feedback">Por favor confirme que toda la información es correcta</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Reservar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
