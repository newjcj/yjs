//jNotify
                            //显示错误或提示信息（需要引用jNotify相关文件）
                            function showjError(tips, TimeShown, autoHide) {
                                jError(
                                  tips,
                                  {
                                      autoHide: autoHide || true, // added in v2.0
                                      TimeShown: TimeShown || 1500,
                                      HorizontalPosition: 'center',
                                      VerticalPosition: 'top',
                                      ShowOverlay: true,
                                      ColorOverlay: '#000',
                                      onCompleted: function () { // added in v2.0
                                          //alert('jNofity is completed !');
                                      }
                                  }
                                );
                            }

                            //显示提示信息
                            function showjSuccess(tips, TimeShown, autoHide) {
                                jSuccess(
                                  tips,
                                  {
                                      autoHide: autoHide || true, // added in v2.0
                                      TimeShown: TimeShown || 1500,
                                      HorizontalPosition: 'center',
                                      VerticalPosition: 'top',
                                      ShowOverlay: true,
                                      ColorOverlay: '#000',
                                      onCompleted: function () { // added in v2.0
                                          //alert('jNofity is completed !');
                                      }
                                  }
                                );
                            }
