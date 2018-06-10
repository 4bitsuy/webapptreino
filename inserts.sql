INSERT INTO `treinolocal`.`cursa`
(`gra_id`,`modu_id`,`alu_id`,`cur_estado`)
VALUES
(1,2,1,'1');

INSERT INTO `treinolocal`.`dicta`
(`gra_id`,`modu_id`,`doc_id`,`dicta_estado`)
VALUES
(1,2,1,'1');

INSERT INTO `treinolocal`.`alumno`
(`alu_per_id`,
`created_at`,
`updated_at`)
VALUES
(1,
NOW(),
null);

INSERT INTO `treinolocal`.`docente`
(`doc_per_id`,
`created_at`,
`updated_at`)
VALUES
(1,
NOW(),
null);

/*Robert */
INSERT INTO `users`(`id`,`password`,`email`,`documento`,`remember_token`,`created_at`,`updated_at`,`name`)
VALUES('2', '$2y$10$DYZNHma5.e0xL.8OaybNWOE5GpvPWKiBNGYbpiA1WTz0i0vKTzUdm', 'ro@gmail.com', '50640349', 'N6buEo4GJdkp3Cgctk1wfPBMbOoBrGUtRe85fuxJ03NuOck2hPd29za1v8ue', '2018-03-09 00:47:42', '2018-03-09 00:47:42', 'robert');
INSERT INTO `relrolusu`(`id_rol`,`id_usu`) VALUES(2,2);
