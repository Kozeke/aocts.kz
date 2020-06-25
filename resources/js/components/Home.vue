<template>
    <div class="main flex-col">
        <div class="nav-bar flex-row">
            <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
            <div class="slogan">Экономим ваше время!</div>
            <div class="contact-us flex-row">
                <span>Связаться с нами</span>
                <div class="circle"></div>
            </div>
            <div class="login-us flex-row">
                <span>Войти</span>
                <div class="circle"></div>
            </div>
            <div class="lang-us flex-row">
                <span>RU</span>
                <div class="circle"></div>
            </div>
        </div>
        <div class="layout flex-row">
            <div class="layout-left">
                <div class="layout-text">
                    <div class="header">Онлайн договор</div>
                    <div class="header">в пару кликов</div>
                    <div class="sub">Компания Daris занимается заключением договоров, на оплату услуг передвижения и остановки грузов по всем железно дорожным путям Казахстана</div>
                    <div class="join flex-row">
                        <span>Присоединиться</span>
                        <svg style="margin: 6px auto auto 4px;" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M5.08743 6.24219L3.35471 6.37361C2.87257 6.41019 2.44315 6.65827 2.17652 7.05421L0.178211 10.0213C-0.0240135 10.3216 -0.0561617 10.6973 0.0921575 11.0265C0.240516 11.3557 0.545396 11.5851 0.907698 11.6402L2.49421 11.8814C2.86534 9.9479 3.75377 8.01913 5.08743 6.24219Z" fill="white"/>
                        <path d="M8.85449 18.1249L9.10023 19.6824C9.15636 20.0381 9.39003 20.3374 9.7253 20.483C9.8648 20.5436 10.0125 20.5735 10.1594 20.5735C10.3657 20.5735 10.5706 20.5145 10.7493 20.3986L13.7717 18.4368C14.175 18.175 14.4277 17.7534 14.4649 17.2802L14.5987 15.5791C12.7887 16.8884 10.824 17.7606 8.85449 18.1249Z" fill="white"/>
                        <path d="M8.25789 17.046C8.31297 17.046 8.36836 17.0416 8.42364 17.0325C9.24879 16.8971 10.0441 16.6689 10.8028 16.3702L4.28211 9.96875C3.97789 10.7135 3.74547 11.4943 3.6075 12.3044C3.55313 12.6237 3.66223 12.949 3.89539 13.178L7.5338 16.7499C7.72739 16.9399 7.98868 17.046 8.25789 17.046Z" fill="white"/>
                        <path d="M18.4058 9.64465C20.0014 6.61613 20.0605 3.41572 19.9771 1.91477C19.9486 1.40048 19.5309 0.990456 19.007 0.962424C18.7581 0.949079 18.463 0.939453 18.1305 0.939453C16.4209 0.939453 13.7158 1.19366 11.1332 2.50506C9.08083 3.54726 6.38956 5.84206 4.80176 8.85786C4.82051 8.87224 4.83883 8.8875 4.85609 8.90445L11.8873 15.8072C11.9046 15.8241 11.9201 15.8421 11.9347 15.8605C15.0066 14.3016 17.3442 11.6596 18.4058 9.64465ZM11.6292 5.09028C12.7715 3.96894 14.6301 3.96882 15.7724 5.09028C16.3257 5.63349 16.6305 6.35578 16.6305 7.12401C16.6305 7.89224 16.3257 8.61454 15.7724 9.15774C15.2013 9.71836 14.4509 9.99872 13.7008 9.9988C12.9505 9.99884 12.2005 9.71851 11.6292 9.15774C11.0759 8.61454 10.7711 7.89224 10.7711 7.12401C10.7711 6.35578 11.0759 5.63349 11.6292 5.09028Z" fill="white"/>
                        <path d="M12.4572 8.34452C13.1426 9.01734 14.2578 9.01738 14.9432 8.34452C15.2752 8.01855 15.458 7.58521 15.458 7.12426C15.458 6.66331 15.2752 6.22997 14.9432 5.90404C14.6005 5.56761 14.1504 5.39941 13.7002 5.39941C13.2501 5.39941 12.7999 5.56761 12.4573 5.90404C12.1253 6.22997 11.9424 6.66331 11.9424 7.12426C11.9424 7.58521 12.1252 8.01859 12.4572 8.34452Z" fill="white"/>
                        <path d="M0.597676 17.1203C0.747637 17.1203 0.897598 17.0642 1.01197 16.9518L2.92498 15.0738C3.15381 14.8491 3.15381 14.4849 2.92498 14.2603C2.69619 14.0356 2.32518 14.0356 2.09635 14.2603L0.18334 16.1383C-0.0454883 16.363 -0.0454883 16.7272 0.18334 16.9518C0.297754 17.0641 0.447715 17.1203 0.597676 17.1203Z" fill="white"/>
                        <path d="M4.67818 15.981C4.44939 15.7563 4.07838 15.7563 3.84955 15.981L0.171621 19.5917C-0.057207 19.8164 -0.057207 20.1806 0.171621 20.4052C0.286035 20.5175 0.435996 20.5737 0.585957 20.5737C0.735918 20.5737 0.885879 20.5175 1.00025 20.4052L4.67814 16.7945C4.90701 16.5698 4.90701 16.2056 4.67818 15.981Z" fill="white"/>
                        <path d="M5.60217 17.7027L3.6892 19.5807C3.46037 19.8054 3.46037 20.1696 3.6892 20.3942C3.80361 20.5065 3.95357 20.5627 4.1035 20.5627C4.25342 20.5627 4.40342 20.5066 4.51779 20.3942L6.4308 18.5162C6.65963 18.2915 6.65963 17.9273 6.4308 17.7027C6.20201 17.478 5.83099 17.478 5.60217 17.7027Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="20" height="19.6345" fill="white" transform="translate(0 0.939453)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="login flex-row">
                        <span>У Вас уже есть аккаунт?</span>
                        <div @click="$router.push({ name: 'login' })" class="go-login">Войти в систему</div>
                    </div>
                </div>
            </div>
            <div class="layout-right">
                <img class="layout-img" src="/images/laptop.svg" alt="laptop">
                <!-- <img class="layout-img-in" src="/images/layout-train.svg" alt="laptop"> -->
            </div>
        </div>
        <div class="service">
            <div class="service-header">Наши услуги</div>
            <div class="service-sub">Пользуясь услугами DARIS, у Вас появляется возможность получить широкий спектр услуг 
                с любой точки нашей планеты, тем самым Вы экономите свое драгоценное время.</div>
            <div class="service-list flex-row">
                <div class="service-single flex-col">
                    <div class="circle"></div>
                    <span class="service-icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.7715 29.7428L19.6435 24.6157L17.1578 27.1013C16.9432 27.3159 16.6317 27.4043 16.3347 27.3357C16.0377 27.2653 15.7991 27.0473 15.703 26.758L10.7308 11.8424C10.6253 11.5265 10.7076 11.178 10.9428 10.9428C11.1771 10.7085 11.5265 10.6227 11.8424 10.7308L26.758 15.703C27.0473 15.7991 27.2653 16.0377 27.3357 16.3347C27.4052 16.6308 27.3168 16.9424 27.1013 17.1578L24.6157 19.6435L29.7428 24.7714C30.0861 25.1147 30.0861 25.671 29.7428 26.0143L26.0143 29.7428C25.671 30.0862 25.1148 30.0862 24.7715 29.7428Z" fill="#4985FF"/>
                        <path d="M11.4258 7.03125C10.94 7.03125 10.5469 6.63814 10.5469 6.15234V0.878906C10.5469 0.393105 10.94 0 11.4258 0C11.9116 0 12.3047 0.393105 12.3047 0.878906V6.15234C12.3047 6.63814 11.9116 7.03125 11.4258 7.03125Z" fill="#4985FF"/>
                        <path d="M7.07572 8.31855L3.34634 4.58918C3.00304 4.24587 3.00304 3.68964 3.34634 3.34634C3.68964 3.00304 4.24587 3.00304 4.58918 3.34634L8.31849 7.07566C8.66179 7.41896 8.66179 7.97519 8.31849 8.31849C7.97519 8.66185 7.41902 8.66185 7.07572 8.31855Z" fill="#4985FF"/>
                        <path d="M3.34634 19.505C3.00304 19.1617 3.00304 18.6055 3.34634 18.2622L7.07566 14.5329C7.41896 14.1896 7.97519 14.1896 8.31849 14.5329C8.66179 14.8762 8.66179 15.4324 8.31849 15.7757L4.58918 19.505C4.24587 19.8483 3.6897 19.8483 3.34634 19.505Z" fill="#4985FF"/>
                        <path d="M14.5329 8.31849C14.1896 7.97519 14.1896 7.41896 14.5329 7.07566L18.2622 3.34634C18.6055 3.00304 19.1617 3.00304 19.505 3.34634C19.8483 3.68964 19.8483 4.24587 19.505 4.58917L15.7757 8.31849C15.4324 8.66179 14.8762 8.66179 14.5329 8.31849Z" fill="#4985FF"/>
                        <path d="M6.15234 12.3047H0.878906C0.393105 12.3047 0 11.9116 0 11.4258C0 10.94 0.393105 10.5469 0.878906 10.5469H6.15234C6.63814 10.5469 7.03125 10.94 7.03125 11.4258C7.03125 11.9116 6.63814 12.3047 6.15234 12.3047Z" fill="#4985FF"/>
                        </svg>
                    </span>
                    <div class="head">Онлайн Договора в пару кликов</div>
                </div>
                <div class="service-single flex-col">
                    <div class="circle"></div>
                    <span class="service-icon">
                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.4604 8.39844H12.5928V9.9631H15.4604V8.39844Z" fill="#4985FF"/>
                        <path d="M7.55907 8.39844H4.69141V9.9631H7.55907V8.39844Z" fill="#4985FF"/>
                        <path d="M22.2839 11.7204C20.6149 11.7204 19.2571 10.3625 19.2571 8.69352V3.71804H17.7819C17.7591 3.61978 17.7199 3.52363 17.6613 3.43434L16.7674 2.07316H16.8284C17.3138 2.07316 17.7073 1.67966 17.7073 1.19429C17.7073 0.708926 17.3138 0.31543 16.8284 0.31543H12.5667C12.0814 0.31543 11.6879 0.708926 11.6879 1.19429C11.6879 1.67966 12.0814 2.07316 12.5667 2.07316H14.7133C14.7372 2.15753 14.7739 2.23973 14.8246 2.31689L15.7448 3.71804H2.82156C1.26574 3.71804 0 4.98378 0 6.5396V12.9784H24.7365C25.2219 12.9784 25.6154 13.3719 25.6154 13.8572C25.6154 14.3426 25.2219 14.7361 24.7365 14.7361H0V15.7316C0 17.2387 1.18764 18.4736 2.67614 18.5495L3.78937 19.9274H0.878863C0.393496 19.9274 0 20.3209 0 20.8063C0 21.2917 0.393496 21.6852 0.878863 21.6852H29.1154C29.6008 21.6852 29.9943 21.2917 29.9943 20.8063C29.9943 20.3209 29.6008 19.9274 29.1154 19.9274H24.5883L23.4781 18.5532H25.0914C26.6646 18.5532 28.1027 17.8273 29.037 16.5617C29.9713 15.2961 30.2415 13.708 29.7782 12.2046L29.629 11.7204H22.2839ZM9.3166 10.7798C9.3166 11.2984 8.89462 11.7204 8.37598 11.7204H3.87415C3.35544 11.7204 2.93347 11.2984 2.93347 10.7798V7.58087C2.93347 7.06217 3.35544 6.6402 3.87415 6.6402H8.37598C8.89468 6.6402 9.3166 7.06217 9.3166 7.58087V10.7798ZM17.2185 10.7798C17.2185 11.2984 16.7965 11.7204 16.2778 11.7204H11.7759C11.2572 11.7204 10.8353 11.2984 10.8353 10.7798V7.58087C10.8353 7.06217 11.2572 6.6402 11.7759 6.6402H16.2778C16.7965 6.6402 17.2185 7.06217 17.2185 7.58087V10.7798ZM15.3187 19.9274L14.2085 18.5532H16.5836L17.6938 19.9274H15.3187ZM10.6839 19.9274L9.57363 18.5532H11.9488L13.059 19.9274H10.6839ZM7.31396 18.5532L8.4242 19.9274H6.0491L4.93886 18.5532H7.31396ZM19.9535 19.9274L18.8433 18.5532H21.2185L22.3287 19.9274H19.9535ZM28.3375 14.7361H27.81C27.3246 14.7361 26.9311 14.3426 26.9311 13.8572C26.9311 13.3718 27.3246 12.9783 27.81 12.9783H28.3375C28.8229 12.9783 29.2164 13.3718 29.2164 13.8572C29.2164 14.3426 28.8229 14.7361 28.3375 14.7361Z" fill="#4985FF"/>
                        <path d="M21.0146 8.69319C21.0146 9.393 21.584 9.96233 22.2838 9.96233H29.0872L28.2291 7.17774C27.9181 6.16851 27.3047 5.30365 26.4551 4.67644C25.6055 4.04928 24.5983 3.71777 23.5423 3.71777H21.0146V8.69319Z" fill="#4985FF"/>
                        </svg>
                    </span>
                    <div class="head">Формирование акт выполненных работ <span>(счетов-фактур, актов сверки)</span>
                        за оказанные услуги по предоставлению подъездного пути.</div>
                </div>
            </div>
        </div>
        <div class="description flex-col">
            <div class="description-one flex-row">
                <div class="desc-left">
                    <div class="head">Описние возможностей</div>
                    <div class="desc-list flex-col">
                        <div class="desc-item flex-row">
                            <span class="circle">
                                <img src="/images/desc_1.png" alt="">
                            </span>
                            <div>Теперь нет необходимости тратить свое время 
                            на бумажную работу.</div>
                        </div>
                        <div class="desc-item flex-row">
                            <span class="circle">
                                <img src="/images/desc_2.png" alt="">
                            </span>
                            <div>Благодаря нашей компании Вы можете: <br />
                            <span>заключить Договор, запросить акт-сверки, просмотреть (запросить) реестр количество пройденных вагонов в онлайн режиме не выходя из дома или офиса.</span></div>
                        </div>
                        <div class="desc-item flex-row">
                            <span class="circle">
                                <img src="/images/desc_3.png" alt="">
                            </span>
                            <div>Пользуясь услугами Компании Дарис, Вы получаете:<br /><span>качественный и своевременный спектр услуг 
                            в онлайн режиме.</span></div>
                        </div>
                    </div>
                </div>
                <div class="desc-right">
                    <img src="/images/description-one.svg" alt="">
                </div>
            </div>
            <div class="description-two">
                <div class="dt-top flex-row">
                    <div class="dt-header">Удобство DARIS</div>
                    <div class="dt-sub">Lorem Ipsum - это текст-"рыба", часто используемый в
                    Lorem Ipsum - это текст-"рыба", </div>
                </div>
                <div class="dt-list flex-row">
                    <div class="dt-item">Ведение лицевых счетов</div>
                    <div class="dt-item">Электронная квитанция</div>
                    <div class="dt-item">История платежей</div>
                    <div class="dt-item">Формирование актов сверки
                        <br /><span>дебиторка/кредиторка</span></div>
                    <div class="dt-item">Счет на оплату по запросу</div>
                    <div class="dt-item">Оплата online</div>
                </div> 
            </div>
        </div>
        <div class="module">
            <div class="module-header">Модули в личном кабинете</div>
            <div class="module-sub">Lorem Ipsum - это текст-"рыба", часто используемый в</div>
            <div class="module-sub">Lorem Ipsum - это текст-"рыба",</div>
            <div class="module-list flex-row">
                <div class="module-single flex-col">
                    <img src="/images/module_temp.png" alt="">
                    <div class="head">Подача заявки на заключение Договора</div>
                </div> 
                <div class="module-single flex-col">
                    <img src="/images/module_temp.png" alt="">
                    <div class="head">Расчет стоимости проезда подвижного состава по подъездному пути</div>
                </div> 
                <div class="module-single flex-col">
                    <img src="/images/module_temp.png" alt="">
                    <div class="head">Соглашение на подачу-уборку вагонов</div>
                </div> 
                <div class="module-single flex-col">
                    <img src="/images/module_temp.png" alt="">
                    <div class="head">Таблица истории сделок</div>
                </div> 
                <div class="module-single flex-col">
                    <img src="/images/module_temp.png" alt="">
                    <div class="head">Контроль и статистика</div>
                </div> 
                <div class="module-single flex-col">
                    <img src="/images/module_temp.png" alt="">
                    <div class="head">Оплата online</div>
                </div> 
                <div class="more-module flex-row">
                    <span>Показать еще</span>
                    <svg style="position: absolute; right: 30px;top: 14px;" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M15.2904 10.9901L6.69068 19.5895C6.14364 20.1368 5.2567 20.1368 4.70992 19.5895C4.1631 19.0427 4.1631 18.1558 4.70992 17.609L12.3193 9.99986L4.71014 2.39095C4.16332 1.84391 4.16332 0.957105 4.71014 0.410283C5.25696 -0.136761 6.14386 -0.136761 6.6909 0.410283L15.2906 9.00983C15.564 9.28337 15.7005 9.64151 15.7005 9.99981C15.7005 10.3583 15.5637 10.7167 15.2904 10.9901Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="20" height="20" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                </div>
            </div>
        </div>
        <div class="home-last">
            <div class="hl-header">Готовы принять решение?</div>
            <div class="hl-sub">Lorem Ipsum - это текст-"рыба", часто используемый в</div>
            <div class="hl-sub">Lorem Ipsum - это текст-"рыба",</div>
            <div class="start flex-row">
                <span>Начать сейчас</span>
                <svg style="margin: 6px auto auto 4px;" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M5.08743 6.24219L3.35471 6.37361C2.87257 6.41019 2.44315 6.65827 2.17652 7.05421L0.178211 10.0213C-0.0240135 10.3216 -0.0561617 10.6973 0.0921575 11.0265C0.240516 11.3557 0.545396 11.5851 0.907698 11.6402L2.49421 11.8814C2.86534 9.9479 3.75377 8.01913 5.08743 6.24219Z" fill="white"/>
                        <path d="M8.85449 18.1249L9.10023 19.6824C9.15636 20.0381 9.39003 20.3374 9.7253 20.483C9.8648 20.5436 10.0125 20.5735 10.1594 20.5735C10.3657 20.5735 10.5706 20.5145 10.7493 20.3986L13.7717 18.4368C14.175 18.175 14.4277 17.7534 14.4649 17.2802L14.5987 15.5791C12.7887 16.8884 10.824 17.7606 8.85449 18.1249Z" fill="white"/>
                        <path d="M8.25789 17.046C8.31297 17.046 8.36836 17.0416 8.42364 17.0325C9.24879 16.8971 10.0441 16.6689 10.8028 16.3702L4.28211 9.96875C3.97789 10.7135 3.74547 11.4943 3.6075 12.3044C3.55313 12.6237 3.66223 12.949 3.89539 13.178L7.5338 16.7499C7.72739 16.9399 7.98868 17.046 8.25789 17.046Z" fill="white"/>
                        <path d="M18.4058 9.64465C20.0014 6.61613 20.0605 3.41572 19.9771 1.91477C19.9486 1.40048 19.5309 0.990456 19.007 0.962424C18.7581 0.949079 18.463 0.939453 18.1305 0.939453C16.4209 0.939453 13.7158 1.19366 11.1332 2.50506C9.08083 3.54726 6.38956 5.84206 4.80176 8.85786C4.82051 8.87224 4.83883 8.8875 4.85609 8.90445L11.8873 15.8072C11.9046 15.8241 11.9201 15.8421 11.9347 15.8605C15.0066 14.3016 17.3442 11.6596 18.4058 9.64465ZM11.6292 5.09028C12.7715 3.96894 14.6301 3.96882 15.7724 5.09028C16.3257 5.63349 16.6305 6.35578 16.6305 7.12401C16.6305 7.89224 16.3257 8.61454 15.7724 9.15774C15.2013 9.71836 14.4509 9.99872 13.7008 9.9988C12.9505 9.99884 12.2005 9.71851 11.6292 9.15774C11.0759 8.61454 10.7711 7.89224 10.7711 7.12401C10.7711 6.35578 11.0759 5.63349 11.6292 5.09028Z" fill="white"/>
                        <path d="M12.4572 8.34452C13.1426 9.01734 14.2578 9.01738 14.9432 8.34452C15.2752 8.01855 15.458 7.58521 15.458 7.12426C15.458 6.66331 15.2752 6.22997 14.9432 5.90404C14.6005 5.56761 14.1504 5.39941 13.7002 5.39941C13.2501 5.39941 12.7999 5.56761 12.4573 5.90404C12.1253 6.22997 11.9424 6.66331 11.9424 7.12426C11.9424 7.58521 12.1252 8.01859 12.4572 8.34452Z" fill="white"/>
                        <path d="M0.597676 17.1203C0.747637 17.1203 0.897598 17.0642 1.01197 16.9518L2.92498 15.0738C3.15381 14.8491 3.15381 14.4849 2.92498 14.2603C2.69619 14.0356 2.32518 14.0356 2.09635 14.2603L0.18334 16.1383C-0.0454883 16.363 -0.0454883 16.7272 0.18334 16.9518C0.297754 17.0641 0.447715 17.1203 0.597676 17.1203Z" fill="white"/>
                        <path d="M4.67818 15.981C4.44939 15.7563 4.07838 15.7563 3.84955 15.981L0.171621 19.5917C-0.057207 19.8164 -0.057207 20.1806 0.171621 20.4052C0.286035 20.5175 0.435996 20.5737 0.585957 20.5737C0.735918 20.5737 0.885879 20.5175 1.00025 20.4052L4.67814 16.7945C4.90701 16.5698 4.90701 16.2056 4.67818 15.981Z" fill="white"/>
                        <path d="M5.60217 17.7027L3.6892 19.5807C3.46037 19.8054 3.46037 20.1696 3.6892 20.3942C3.80361 20.5065 3.95357 20.5627 4.1035 20.5627C4.25342 20.5627 4.40342 20.5066 4.51779 20.3942L6.4308 18.5162C6.65963 18.2915 6.65963 17.9273 6.4308 17.7027C6.20201 17.478 5.83099 17.478 5.60217 17.7027Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="20" height="19.6345" fill="white" transform="translate(0 0.939453)"/>
                        </clipPath>
                        </defs>
                        </svg>
            </div>
            <img src="/images/laptop.svg" alt="laptop">
        </div>
        <div class="footer">
            <div class="footer-body flex-row">
                <div class="info flex-col">
                    <label></label>
                    <span>Lorem Ipsum - это текст -"рыба", часто Lorem Ipsum - это текст -"рыба", часто</span>
                </div>
                <div class="menu flex-col" v-for="i in 4" :key="i">
                    <label>Основные</label>
                    <span>Главная</span>
                    <span>Наши проекты</span>
                    <span>Главная</span>
                    <span>Наши проекты</span>
                    <span>Наши</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="scss" scoped>
    .nav-bar{
        position: relative;
        width: 100%;
        height: 100px;
        background: #FFFFFF;
        font-size: 16px;
        line-height: 50px;
        color: #06397D;
        font-weight: 500;
        .logo{
            cursor: pointer;
            position: absolute;
            left: 18%;
            width: 160px;
            height: 50px;
            top: 25px;
            background: #F6F6F8;            
        }
        .slogan{
            position: absolute;
            height: 50px;
            top: 25px;
            left: calc(18% + 140px);
            width: 260px;
        }
        .contact-us{
            cursor: pointer;
            position: absolute;
            width: 200px;
            top: 30px;
            color: #4985FF;
            right: calc(18% + 110px + 120px);
            border: 1px solid #4985FF;
            box-sizing: border-box;
            height: 40px;
            border-radius: 6px;
            span{
                cursor: pointer;
                margin: -5px 6px 5px 10px;
            }
            .circle{
                cursor: pointer;
                margin-left: 6px;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                background: #4985FF;
                margin-top: 12px;
            }
        }
        .login-us{
            cursor: pointer;
            position: absolute;
            width: 105px;
            top: 30px;
            color: #4985FF;
            right: calc(18% + 110px);
            border: 1px solid #4985FF;
            box-sizing: border-box;
            height: 40px;
            border-radius: 6px;
            span{
                cursor: pointer;
                margin: -5px 6px 5px 10px;
            }
            .circle{
                cursor: pointer;
                margin-left: 6px;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                background: #4985FF;
                margin-top: 12px;
            }
        }
        .lang-us{
            cursor: pointer;
            position: absolute;
            width: 95px;
            top: 30px;
            color: #4985FF;
            right: calc(18%);
            border: 1px solid #4985FF;
            box-sizing: border-box;
            height: 40px;
            border-radius: 6px;
            span{
                cursor: pointer;
                margin: -5px 6px 5px 10px;
            }
            .circle{
                cursor: pointer;
                margin-left: 6px;
                width: 16px;
                height: 16px;
                border-radius: 50%;
                background: #4985FF;
                margin-top: 12px;
            }
        }
    }
    .main{
        position: relative;
        width: 100%;
        .layout{
            background: #FFFFFF;
            position: relative;
            height: 720px;
            .layout-left{
                position: relative;
                width: 56%;
                background-image: linear-gradient( rgba(196, 196, 196, 0.4), rgba(196, 196, 196, 0.4) ), url('/images/layout.png');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                .layout-text{
                    width: 460px;
                    position: relative;
                    top: 160px;
                    left: 32%;
                    color: #06397D;
                    .header{
                        text-align: left;
                        font-weight: 800;
                        font-size: 42px;
                        line-height: 56px;
                    }
                    .sub{
                        margin-top: 30px;
                        text-align: left;
                        height: 77px;
                        font-weight: normal;
                        font-size: 16px;
                        line-height: 25px;
                    }
                    .join{
                        cursor: pointer;
                        width: 250px;
                        margin-top: 54px;
                        box-sizing: border-box;
                        height: 50px;
                        border-radius: 6px;
                        background: #4985FF;
                        box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
                        border-radius: 6px;
                        span{
                            color: #FFFFFF;
                            cursor: pointer;
                            margin: 14px 10px auto 30px;
                            font-weight: bold;
                            font-size: 16px;
                            line-height: 20px;
                        }
                        .circle{
                            cursor: pointer;
                            margin-left: 6px;
                            width: 20px;
                            height: 20px;
                            border-radius: 50%;
                            background: #FFFFFF;
                            margin-top: 14px;
                        }
                    }
                    .login{
                        text-align: left;
                        margin-top: 30px;
                        font-weight: 500;
                        font-size: 14px;
                        line-height: 17px;
                        .go-login{
                            cursor: pointer;
                            margin-left: 10px;
                            font-weight: 600;
                            text-decoration-line: underline;
                            color: #4985FF;
                        }
                    }
                }
            }
            .layout-right{
                background: #FFFFFF;
                .layout-img{
                    width: 720px;
                    position: absolute;
                    left: 44%;
                    top: 114px;
                }
                .layout-img-in{
                    width: 555px;
                    position: absolute;
                    left: 44%;
                    top: 138px;
                }
            }
        }
    }
    .service{
        position: relative;
        height: 700px;
        background: #D6E6FF;
        padding: 0 18%;
        .service-header{
            text-align: left;
            margin-top: 80px;
            font-weight: bold;
            font-size: 36px;
            line-height: 53px;
            color: #06397D;
            margin-bottom: 15px;
        }
        .service-sub{
            font-size: 16px;
            line-height: 25px;
            text-align: left;
            color: #06397D;
        }
        .service-list{
            position: relative;
            margin-top: 45px;
            .service-single{
                position: relative;
                background: #FCFCFC;
                border: 1px solid #E6EAF3;
                box-sizing: border-box;
                border-radius: 10px;
                padding: 0 30px;
                height: 240px;
                width: calc(50% - 15px);
                div{
                    text-align: left;
                }
                .circle{
                    margin-top: 8px;
                    width: 50px;
                    height: 50px;
                    background: #4985FF;
                    opacity: 0.1;
                    border-radius: 50%;
                }
                .service-icon{
                    position: absolute;
                    top: 45px;
                    left: 45px;
                }
                .head{
                    margin-top: 25px;
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 170%;
                    color: #06397D;
                    span{
                        font-weight: normal;
                    }
                }
            }
            .service-single:last-of-type{
                margin-left: 30px;
                .circle{
                    margin-top: 26px;
                }
                .service-icon{
                    top: 38px;
                    left: 40px;
                }
                .head{
                    margin-top: 12px;
                }
            }
        }
    }
    .description{
        position: relative;
        background: #FFFFFF;
        .description-one{
            position: relative;
            .desc-left{
                padding: 70px 20px 70px 18%;
                width: 54%;
                color: #06397D;
                div{
                    text-align: left;
                }
                .head{
                    font-weight: bold;
                    font-size: 32px;
                    line-height: 42px;
                }
                .desc-list{
                    margin-top: 10px;
                    .desc-item{
                        margin-top: 30px;
                        .circle{
                            width: 50px;
                            height: 50px;
                            background: rgba(73, 133, 255, 0.1);
                            border-radius: 50%;
                            padding: 10px;
                        }
                        div{
                            margin-left: 25px;
                            font-weight: 600;
                            font-size: 16px;
                            line-height: 150%;
                            color: #06397D;
                            span{
                                font-weight: normal;
                            }
                        }
                    }
                }
            }
            .desc-right{
                position: relative;
                margin-left: 6%;
                width: 46%;
                overflow: hidden;
                img{
                    display: block;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    min-height: 100%;
                    min-width: 100%;
                    transform: translate(-50%, -50%);
                }
            }
        }
        .description-two{
            position: relative;
            padding: 70px 18%;
            background: #D6E6FF;
            .dt-top{
                .dt-header{
                    font-style: normal;
                    font-weight: bold;
                    font-size: 32px;
                    line-height: 42px;
                    color: #06397D;
                    width: 33%;
                }
                .dt-sub{
                    width: calc(66% - 24px);
                    margin-left: 24px;
                    font-style: normal;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 26px;
                    color: #06397D;
                    text-align: left;
                }
            }
            .dt-list{
                margin-top: 10px;
                flex-wrap: wrap;
                .dt-item{
                    padding: 0 4px;
                    margin-right: 24px;
                    margin-top: 24px;
                    width: calc(33% - 16px);
                    background: #FCFCFC;
                    border: 1px solid #E6EAF3;
                    border-radius: 10px;
                    height: 100px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 24px;
                    align-items: center;
                    text-align: center;
                    color: #06397D;
                    span{
                        font-weight: normal;
                    }
                }
                .dt-item:nth-child(3n){
                    margin-right: 0;
                }
            }
        }
    }
    .module{
        position: relative;
        padding: 80px 18%;
        background: #FCFCFC;
        .module-header{
            font-style: normal;
            font-weight: bold;
            font-size: 32px;
            line-height: 53px;
            text-align: center;
            color: #06397D;
            margin-bottom: 15px;
        }
        .module-sub{
            font-size: 16px;
            line-height: 25px;
            text-align: center;
            color: #999999;
        }
        .module-list{
            flex-wrap: wrap;
            position: relative;
            margin-top: 30px;
            .module-single{
                background: #FFFFFF;
                padding: 20px;
                height: 380px;
                margin-right: 24px;
                margin-top: 24px;
                width: calc(33% - 16px);
                background: #FCFCFC;
                box-shadow: 0px 0px 15px #D8D8D8;
                border-radius: 10px;
                img{
                    height: 210px;
                    width: 100%;
                    background: rgba(233, 233, 233, 0.4);
                    object-fit: cover;
                }
                .head{
                    height: 120px;
                    margin-top: 30px;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 150%;
                    display: flex;
                    text-align: center;
                    justify-content: center;
                    align-items: center;
                    color: #06397D;
                }
            }
            .module-single:nth-child(3n){
                margin-right: 0;
            }
        }
        .more-module{
            display: none;
            position: relative;
            cursor: pointer;
            width: 100%;
            margin-top: 42px;
            box-sizing: border-box;
            height: 50px;
            border-radius: 6px;
            background: #4985FF;
            box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
            border-radius: 6px;
            span{
                color: #FFFFFF;
                cursor: pointer;
                margin: 14px 10px auto 30px;
                font-weight: bold;
                font-size: 16px;
                line-height: 20px;
            }
        }
    }
    .home-last{
        position: relative;
        height: 700px;
        background: rgba(228, 233, 244, 0.2);
        overflow: hidden;
        .hl-header{
            margin-top: 80px;
            font-weight: bold;
            font-size: 36px;
            line-height: 53px;
            color: #2D4C64;
            margin-bottom: 15px;
        }
        .hl-sub{
            font-size: 16px;
            line-height: 25px;
            text-align: center;
            color: #2D4C64;
        }
        .start{
            position: relative;
            left: calc(50% - 125px);
            cursor: pointer;
            width: 250px;
            margin-top: 40px;
            box-sizing: border-box;
            height: 50px;
            border-radius: 6px;
            background: #4985FF;
            box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
            border-radius: 6px;
            span{
                color: #FFFFFF;
                cursor: pointer;
                margin: 14px 10px auto 42px;
                font-weight: bold;
                font-size: 16px;
                line-height: 20px;
            }
            .circle{
                cursor: pointer;
                margin-left: 6px;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background: #FFFFFF;
                margin-top: 14px;
            }
        }
        img{
            
            margin-top: 100px;
        }
    }
    .footer{
        position: relative;
        height: 412px;
        background: #FFFFFF;
        padding-top: 60px;
        .footer-body{
            position: relative;
            width: 70%;
            left: 15%;
            .info{
                width: 24%;
                label{
                    width: 130px;
                    height: 60px;
                    background: #F6F6F8;
                }
                span{
                    text-align: left;
                    margin-top: 30px;
                    font-weight: normal;
                    font-size: 16px;
                    line-height: 25px;
                    color: #999999;
                }
            }
            .menu{
                width: 15%;
                margin: 0 2%;
                span, label{
                    text-align: left;
                }
                label{
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 22px;
                    color: #000000;
                    margin-bottom: 30px;
                }
                span{
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    color: #999999;
                    margin-bottom: 25px;
                }
            }
        }
    }
    @media only screen and (max-width: 1480px){
        .layout .layout-left .layout-text{
            max-width: 420px;
        }
    }
    @media only screen and (min-width: 1520px){
        .layout-right{
            .layout-img{
                min-width: 760px;
            }
            .layout-img-in{
                min-width: 585px;
                right: 150px;
            }
        }
    }
    @media only screen and (min-width: 1620px){
        .module-list{
            .module-single{
                padding: 30px !important;
                height: 380px;
            }
        }
        .layout-right{
            .layout-img{
                min-width: 820px;
            }
            .layout-img-in{
                min-width: 645px;
            }
        }
    }
    @media only screen and (min-width: 1740px){
        .layout-right{
            .layout-img{
                min-width: 920px;
            }
            .layout-img-in{
                min-width: 845px;
            }
        }
    }
    @media only screen and (max-width: 1340px){
        .layout{
            height: 560px !important;
            .layout-left{
                .layout-text{
                    top: 80px !important;
                    left: 18% !important;
                }
            }
            .layout-right{
                .layout-img{
                    left: 46% !important;
                    top: 114px !important;
                    width: 520px !important;
                }
            }
        }
        .service{
            height: 660px;
            padding: 0 10%;
        }
        .description-one{
            .desc-left{
                padding: 50px 20px 60px 10% !important;
            }
        }
        .description-two{
            padding: 50px 10% !important;
        }
        .module{
            padding: 50px 10% !important;
        }
    }
    @media only screen and (max-width: 1020px){
        .layout{
            height: 480px !important;
            .layout-left{
                width: 100% !important;
                .layout-text{
                    width: 60% !important;
                    top: 70px !important;
                    left: 20% !important;
                    .header{
                        font-weight: 700 !important;
                        font-size: 32px !important;
                        line-height: 52px !important;
                    }
                    .sub{
                        margin-top: 25px !important;
                        height: 70px !important;
                        font-size: 16spx !important;
                        line-height: 23px !important;
                    }
                    .join{
                        margin-top: 36px !important;
                        height: 50px !important;
                        span{
                            font-size: 14px !important;
                        }
                    }
                }
            }
            .layout-right{
                display: none !important;
            }
        }
        .service{
            .service-header{
                margin-top: 50px;
            }
            .service-list{
                flex-direction: column !important;
                margin-top: 25px !important;
                .service-single{
                    padding: 0 30px;
                    height: 180px;
                    width: calc(100%);
                    margin-left: 0 !important;
                    margin-top: 20px;
                }
            }
        }
        .description-one{
            flex-wrap: wrap;
            .desc-left{
                padding: 50px 10% !important;
                width: 100% !important;
            }
            .desc-right{
                margin-left: 0 !important;
                width: 100% !important;
                height: 280px !important;
            }
        }
        .description-two{
            .dt-top{
                flex-direction: column !important;
                .dt-header{
                    text-align: left;
                    font-size: 32px;
                    line-height: 42px;
                    width: 100% !important;
                }
                .dt-sub{
                    margin-top: 15px;
                    text-align: left;
                    width: 100% !important;
                    margin-left: 0 !important;
                    font-size: 16px;
                    line-height: 26px;
                }
            }
            .dt-list{
                margin-top: 10px;;
                .dt-item{
                    padding: 0 8px !important;
                    margin-right: 24px;
                    margin-top: 24px;
                    width: calc(50% - 12px) !important;
                }
            }
            .dt-item:nth-child(3n){
                margin-right: 24px !important;
            }
            .dt-item:nth-child(2n){
                margin-right: 0 !important;
            }
        }
        .module{
            .module-list{
                margin-top: 10px !important;
                .module-single{
                    padding: 15px !important;
                    height: 380px;
                    margin-right: 32px !important;
                    margin-top: 32px !important;
                    width: calc(50% - 16px) !important;
                }
                .module-single:nth-child(3n){
                    margin-right: 32px !important;
                }
                .module-single:nth-child(2n){
                    margin-right: 0px !important;
                }
            }
        }
    }
    @media only screen and (max-width: 920px){
        .service{
            height: 700px;
            .service-list{
                margin-top: 15px !important;
                .service-single{
                    padding: 0 20px;
                    height: 200px;
                    .service-icon{
                        left: 30px !important;
                    }
                }
            }
        }
    }
    @media only screen and (max-width: 620px){
        .layout{
            height: 440px !important;
            .layout-left{
                .layout-text{
                    width: 80% !important;
                    top: 40px !important;
                    left: 10% !important;
                    .header{
                        font-size: 28px !important;
                        line-height: 42px !important;
                    }
                    .sub{
                        margin-top: 15px !important;
                        height: 110px !important;
                    }
                    .join{
                        margin-top: 32px !important;
                    }
                    .login{
                        margin-top: 10px !important;
                        flex-direction: column !important;
                        span, div{
                            text-align: left !important;
                            margin-left: 0 !important;
                            margin-top: 10px !important;
                        }
                    }
                }
            }
            .layout-right{
                display: none !important;
            }
        }
        .service{
            height: 800px;
            .service-header{
                margin-top: 40px;
                font-size: 28px;
            }
            .service-sub{
                font-size: 14px;
                line-height: 20px;
            }
            .service-list{
                margin-top: 15px !important;
                .service-single{
                    padding: 0 20px;
                    height: 240px;
                    .service-icon{
                        top: 45px;
                        left: 45px;
                    }
                    .head{
                        margin-top: 25px;
                        font-size: 16px;
                        line-height: 140%;
                    }
                }
                .service-single:last-of-type{
                    .circle{
                        margin-top: 16px;
                    }
                    .service-icon{
                        top: 30px !important;
                    }
                 }
            }
        }
        .description-one{
            .desc-left{
                padding: 30px 10% 50px 10% !important;
                width: 100% !important;
                .head{
                    font-weight: bold;
                    font-size: 28px !important;
                    line-height: 40px !important;
                }
                .desc-list{
                    margin-top: 10px;
                    .desc-item{
                        margin-top: 25px !important;
                        div{
                            margin-left: 20px !important;
                            font-size: 14px !important;
                            line-height: 140% !important;
                        }
                    }
                }
            }
            .desc-right{
                height: 200px !important;
            }
        }
        .description-two{
            padding: 30px 10% 50px 10% !important;
            .dt-top{
                .dt-header{
                    font-size: 28px;
                    line-height: 38px;
                    width: 100% !important;
                }
                .dt-sub{
                    margin-top: 15px;
                    width: 100% !important;
                    margin-left: 0 !important;
                    font-size: 14px;
                    line-height: 22px;
                }
            }
            .dt-list{
                margin-top: 10px;;
                .dt-item{
                    padding: 0 8px !important;
                    margin-right: 0 !important;
                    width: calc(100% ) !important;
                }
            }
        }
        .module{
            padding: 30px 10% 50px 10% !important;
            .module-header{
                font-size: 28px !important;
                line-height: 38px !important;
            }
            .module-sub{
                font-size: 16px;
                line-height: 22px !important;
            }
            .module-list{
                margin-top: 10px !important;
                .module-single{
                    padding: 15px !important;
                    height: 380px;
                    margin-right: 0 !important;
                    margin-top: 32px !important;
                    width: calc(100%) !important;
                    .head{
                        height: 120px;
                        margin-top: 20px;
                        font-size: 16px !important;
                    }
                }
                .module-single:nth-child(3n){
                    margin-right: 0px !important;
                }
                .module-single:nth-child(-n + 3){
                    display: none !important;
                }
            }
            .more-module{
                display: flex !important;
            }
        }
    }
</style>
