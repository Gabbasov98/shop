<div class="modal fade cart-modal" id="addCartModal"  role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <img src="images/close_modal.png" alt=""> 

          </span>
        </button>
        <div class="cart-modal__inner">
          <img src="images/svg/cart_modal.svg" alt="">
          <p class="cart-modal__title">Товар добавлен в корзину!</p>
          <p class="cart-modal__desc">Может ещё что-то вас заинтересует?</p>
          <div class="cart-modal__buttons">
            <button>продолжить выбор</button>
            <button>оформить заказ</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade question-modal" id="questionModal"  role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <img src="images/close_modal.png" alt=""> 

          </span>
        </button>
        <div class="question-modal__inner">
            <p class="question-modal__title">Вопрос по товару</p>
            <div class="question-modal__item">
              <div class="question-modal__item-img"><img src="images/catalog_item1.jpg" alt=""></div> 
              <div class="question-modal__item-info">
                <p class="question-modal__item-title">Форма для выпечки со съемным дном Caramella гранит круг 20 см</p>
                <p class="question-modal__item-desc">Код товара: 008244</p>
              </div>
            </div>
            <div class="question-modal__inputs">
              <div class="question-modal__name">
                <label for="">Ваше имя <span>*</span></label>
                <input type="text">
              </div>
              <div class="question-modal__email">
                <label for="">Эл.почта <span>*</span></label>
                <input type="email">
              </div>
              <div class="question-modal__phone" placeholder="+7 (     )      -">
                <label for="">Номер телефона</label>
                <input type="tel">
              </div>
              <div class="question-modal__question">
                <label for="">Ваш вопрос <span>*</span></label>
                <textarea ></textarea>
              </div>
            </div>
            
            <button class="question-modal__btn">ОТПРАВИТЬ ВОПРОС</button>
            <div class="question-modal__agree">
              Нажимая кнопку “Отправить вопрос” вы принимаете <br>
              <a href="">пользовательское соглашение на обработку персональных данных</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade message-modal" id="messageModal"  role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <img src="images/close_modal.png" alt=""> 

          </span>
        </button>
        <div class="message-modal__inner">
          <img src="images/svg/message_success.svg" alt="">
          <p class="message-modal__title">Сообщение отправлено</p>
          <p class="message-modal__desc">В ближайшее время мы свяжемся с вами.</p>
          <div class="message-modal__buttons">
            <button>ЗАКРЫТЬ СООБЩЕНИЕ</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>